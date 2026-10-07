<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminServiceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');
    }

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    public function test_guest_cannot_open_services_admin(): void
    {
        $this->get(route('admin.services.index'))
            ->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_create_service(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.services.store'), [
                'title' => 'Orthodontie invisible',
                'slug' => 'orthodontie-invisible',
                'category' => Service::CATEGORY_ESTHETIQUE,
                'hero_image' => UploadedFile::fake()->image('hero.jpg', 800, 400),
                'featured_image' => UploadedFile::fake()->image('main.jpg', 600, 400),
                'excerpt' => 'Un sourire aligné en douceur.',
                'body' => '<h3>Présentation</h3><p>Les aligneurs corrigent de nombreux cas.</p><script>alert(1)</script>',
                'sort_order' => 4,
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.services.index'));

        $service = Service::query()->first();
        $this->assertNotNull($service);
        $this->assertSame('orthodontie-invisible', $service->slug);
        $this->assertSame(Service::CATEGORY_ESTHETIQUE, $service->category);
        $this->assertStringContainsString('Les aligneurs', (string) $service->body);
        $this->assertStringNotContainsString('<script>', (string) $service->body);
        Storage::disk('public')->assertExists($service->hero_image);
    }

    public function test_published_service_is_visible_on_public_pages(): void
    {
        $service = Service::factory()->create([
            'title' => 'Implant dentaire',
            'slug' => 'implant-dentaire',
            'body' => '<p>Une racine artificielle en titane.</p>',
            'is_published' => true,
        ]);

        $this->get(route('service.index'))
            ->assertOk()
            ->assertSee('Implant dentaire');

        $this->get(route('implant-dentaire'))
            ->assertOk()
            ->assertSee('Implant dentaire')
            ->assertSee('Une racine artificielle en titane.');

        $this->get(route('service.show', $service->slug))
            ->assertOk()
            ->assertSee('Implant dentaire');
    }

    public function test_unpublished_service_is_hidden(): void
    {
        $service = Service::factory()->create([
            'title' => 'Soin brouillon',
            'slug' => 'soin-brouillon',
            'is_published' => false,
        ]);

        $this->get(route('service.index'))
            ->assertDontSee('Soin brouillon');

        $this->get(route('service.show', $service->slug))
            ->assertNotFound();
    }

    public function test_admin_can_update_and_delete_service(): void
    {
        $service = Service::factory()->create([
            'title' => 'Ancien titre',
            'slug' => 'ancien-titre',
        ]);

        $this->actingAs($this->admin())
            ->put(route('admin.services.update', $service), [
                'title' => 'Nouveau titre',
                'slug' => 'nouveau-titre',
                'category' => Service::CATEGORY_SOINS,
                'body' => '<p>Texte mis à jour.</p>',
                'is_published' => 1,
                'sort_order' => 2,
            ])
            ->assertRedirect(route('admin.services.index'));

        $this->assertDatabaseHas('services', [
            'id' => $service->id,
            'title' => 'Nouveau titre',
            'slug' => 'nouveau-titre',
        ]);

        $this->actingAs($this->admin())
            ->delete(route('admin.services.destroy', $service))
            ->assertRedirect(route('admin.services.index'));

        $this->assertDatabaseMissing('services', ['id' => $service->id]);
    }

    public function test_admin_can_remove_stored_images_on_update(): void
    {
        Storage::disk('public')->put('services/hero-old.jpg', 'fake-hero');
        Storage::disk('public')->put('services/featured-old.jpg', 'fake-featured');

        $service = Service::factory()->create([
            'hero_image' => 'services/hero-old.jpg',
            'featured_image' => 'services/featured-old.jpg',
        ]);

        $this->actingAs($this->admin())
            ->put(route('admin.services.update', $service), [
                'title' => $service->title,
                'category' => $service->category,
                'remove_hero_image' => 1,
                'remove_featured_image' => 1,
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.services.index'));

        $service->refresh();
        $this->assertNull($service->hero_image);
        $this->assertNull($service->featured_image);
        Storage::disk('public')->assertMissing('services/hero-old.jpg');
        Storage::disk('public')->assertMissing('services/featured-old.jpg');
    }

    public function test_admin_can_upload_editor_image(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.services.images'), [
                'file' => UploadedFile::fake()->image('contenu.png', 800, 600),
            ])
            ->assertOk()
            ->assertJsonStructure(['location']);
    }

    public function test_body_keeps_text_alignment(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.services.store'), [
                'title' => 'Texte centré',
                'slug' => 'texte-centre',
                'category' => Service::CATEGORY_SOINS,
                'body' => '<p style="text-align: center">Paragraphe centré</p>',
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.services.index'));

        $service = Service::query()->first();
        $this->assertStringContainsString('text-align: center', (string) $service->body);
        $this->assertStringContainsString('Paragraphe centré', (string) $service->body);
    }

    public function test_body_keeps_custom_image_dimensions_and_styles(): void
    {
        $htmlWithStyledImage = '<p>Introduction</p><p><img src="/storage/services/sample.jpg" alt="Dentition" style="width: 50%; height: auto; display: block; margin-left: auto; margin-right: auto; border-radius: 10px;"></p>';

        $this->actingAs($this->admin())
            ->post(route('admin.services.store'), [
                'title' => 'Soins avec image stylisée',
                'slug' => 'soins-image-stylisee',
                'category' => Service::CATEGORY_SOINS,
                'body' => $htmlWithStyledImage,
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.services.index'));

        $service = Service::query()->where('slug', 'soins-image-stylisee')->first();
        $this->assertNotNull($service);
        $this->assertStringContainsString('width: 50%', (string) $service->body);
        $this->assertStringContainsString('border-radius: 10px', (string) $service->body);
        $this->assertStringContainsString('margin-left: auto', (string) $service->body);
    }

    public function test_compressor_handles_image_upload_and_stores_valid_file(): void
    {
        $file = UploadedFile::fake()->image('test-upload.jpg', 640, 480);
        $compressor = app(\App\Services\GalleryImageCompressor::class);
        $stored = $compressor->compressAndStore($file, 'test-images');

        $this->assertNotEmpty($stored);
        Storage::disk('public')->assertExists($stored);
    }
}

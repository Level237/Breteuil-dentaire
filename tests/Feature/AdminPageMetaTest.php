<?php

namespace Tests\Feature;

use App\Models\PageMeta;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPageMetaTest extends TestCase
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

    public function test_guest_cannot_open_seo_admin(): void
    {
        $this->get(route('admin.seo.index'))
            ->assertNotFound();
    }

    public function test_admin_can_update_page_meta_title_and_image(): void
    {
        $page = PageMeta::factory()->create([
            'page_key' => 'faq',
            'meta_title' => 'FAQ',
            'meta_description' => 'Ancienne description',
        ]);

        $this->actingAs($this->admin())
            ->put(route('admin.seo.update', $page), [
                'meta_title' => 'Questions fréquentes',
                'meta_description' => 'Réponses du cabinet sur les implants.',
                'meta_image' => UploadedFile::fake()->image('faq-og.jpg', 1200, 630),
            ])
            ->assertRedirect(route('admin.seo.index'));

        $page->refresh();
        $this->assertSame('Questions fréquentes', $page->meta_title);
        $this->assertNotNull($page->meta_image);
        Storage::disk('public')->assertExists($page->meta_image);
    }

    public function test_public_pages_use_page_meta_title_and_image(): void
    {
        PageMeta::factory()->create([
            'page_key' => 'homepage',
            'meta_title' => 'Cabinet Breteuil test',
            'meta_description' => 'Description d’accueil de test',
            'meta_image' => 'assets/images/accueil.jpeg',
        ]);

        $this->get(route('homepage'))
            ->assertOk()
            ->assertSee('Cabinet Breteuil test', false)
            ->assertSee('Description d’accueil de test', false)
            ->assertSee('og:image', false)
            ->assertSee('accueil.jpeg', false);
    }
}

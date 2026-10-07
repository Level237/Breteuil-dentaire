<?php

namespace Tests\Feature;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminGalleryTest extends TestCase
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

    public function test_guest_cannot_open_gallery_admin(): void
    {
        $this->get(route('admin.galeries.index'))
            ->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_create_gallery_image_with_alt(): void
    {
        $file = $this->jpegUpload('cabinet.jpg');

        $this->actingAs($this->admin())
            ->post(route('admin.galeries.store'), [
                'image' => $file,
                'alt' => 'Accueil du cabinet dentaire',
                'sort_order' => 2,
            ])
            ->assertRedirect(route('admin.galeries.index'));

        $this->assertDatabaseHas('galleries', [
            'alt' => 'Accueil du cabinet dentaire',
            'sort_order' => 2,
        ]);

        $gallery = Gallery::query()->first();
        $this->assertNotNull($gallery);
        Storage::disk('public')->assertExists($gallery->path);
        $this->assertStringEndsWith('.jpg', $gallery->path);
    }

    public function test_store_requires_alt(): void
    {
        $this->actingAs($this->admin())
            ->from(route('admin.galeries.create'))
            ->post(route('admin.galeries.store'), [
                'image' => $this->jpegUpload('cabinet.jpg'),
                'alt' => '',
            ])
            ->assertRedirect(route('admin.galeries.create'))
            ->assertSessionHasErrors('alt');
    }

    public function test_public_gallery_renders_alt(): void
    {
        Storage::disk('public')->put('galleries/test.jpg', 'fake');

        $gallery = Gallery::factory()->create([
            'path' => 'galleries/test.jpg',
            'alt' => 'Salle de soins du cabinet',
            'sort_order' => 1,
        ]);

        $this->get(route('visite-cabinet'))
            ->assertOk()
            ->assertSee('alt="'.$gallery->alt.'"', false)
            ->assertSee($gallery->alt);
    }

    public function test_admin_can_delete_gallery_image(): void
    {
        Storage::disk('public')->put('galleries/to-delete.jpg', 'fake');

        $gallery = Gallery::factory()->create([
            'path' => 'galleries/to-delete.jpg',
            'alt' => 'Photo à retirer',
        ]);

        $this->actingAs($this->admin())
            ->delete(route('admin.galeries.destroy', $gallery))
            ->assertRedirect(route('admin.galeries.index'));

        $this->assertDatabaseMissing('galleries', ['id' => $gallery->id]);
        Storage::disk('public')->assertMissing('galleries/to-delete.jpg');
    }

    private function jpegUpload(string $name): UploadedFile
    {
        $path = sys_get_temp_dir().'/'.$name;
        file_put_contents($path, base64_decode(
            '/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAP//////////////////////////////////////////////////////////////////////////////////////wgALCAABAAEBAREA/8QAFBABAAAAAAAAAAAAAAAAAAAAAP/aAAgBAQABPxA='
        ));

        return new UploadedFile($path, $name, 'image/jpeg', null, true);
    }
}

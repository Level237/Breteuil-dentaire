<?php

namespace Tests\Feature;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminFaqTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    public function test_guest_cannot_open_faq_admin(): void
    {
        $this->get(route('admin.faqs.index'))
            ->assertNotFound();
    }

    public function test_admin_can_view_faq_list(): void
    {
        Faq::factory()->create([
            'question' => 'Qu’est-ce qu’un implant dentaire ?',
            'category' => 'Implant dentaire',
        ]);

        $this->actingAs($this->admin())
            ->get(route('admin.faqs.index'))
            ->assertOk()
            ->assertSee('Qu’est-ce qu’un implant dentaire ?')
            ->assertSee('Implant dentaire');
    }

    public function test_admin_can_create_faq(): void
    {
        $this->actingAs($this->admin())
            ->post(route('admin.faqs.store'), [
                'category' => 'Implant dentaire',
                'question' => 'Est-ce que cela fait mal ?',
                'answer' => 'La pose se fait sous anesthésie locale.',
                'sort_order' => 2,
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.faqs.index'));

        $this->assertDatabaseHas('faqs', [
            'question' => 'Est-ce que cela fait mal ?',
            'category' => 'Implant dentaire',
            'sort_order' => 2,
            'is_published' => true,
        ]);
    }

    public function test_admin_can_update_faq(): void
    {
        $faq = Faq::factory()->create([
            'question' => 'Ancienne question',
            'category' => 'Général',
        ]);

        $this->actingAs($this->admin())
            ->put(route('admin.faqs.update', $faq), [
                'category' => 'Implant dentaire',
                'question' => 'Nouvelle question',
                'answer' => 'Réponse mise à jour.',
                'sort_order' => 4,
                'is_published' => 1,
            ])
            ->assertRedirect(route('admin.faqs.index'));

        $this->assertDatabaseHas('faqs', [
            'id' => $faq->id,
            'question' => 'Nouvelle question',
            'category' => 'Implant dentaire',
        ]);
    }

    public function test_admin_can_delete_faq(): void
    {
        $faq = Faq::factory()->create();

        $this->actingAs($this->admin())
            ->delete(route('admin.faqs.destroy', $faq))
            ->assertRedirect(route('admin.faqs.index'));

        $this->assertDatabaseMissing('faqs', ['id' => $faq->id]);
    }

    public function test_public_faq_page_shows_published_items_grouped_by_category(): void
    {
        Faq::factory()->create([
            'category' => 'Implant dentaire',
            'question' => 'Qu’est-ce qu’un implant dentaire ?',
            'answer' => 'Une racine artificielle en titane.',
            'is_published' => true,
        ]);

        Faq::factory()->create([
            'category' => 'Soins',
            'question' => 'Faut-il un rendez-vous ?',
            'answer' => 'Oui, prenez rendez-vous en ligne.',
            'is_published' => true,
        ]);

        Faq::factory()->create([
            'category' => 'Implant dentaire',
            'question' => 'Question masquée',
            'is_published' => false,
        ]);

        $this->get(route('faq'))
            ->assertOk()
            ->assertSee('Qu’est-ce qu’un implant dentaire ?')
            ->assertSee('Une racine artificielle en titane.')
            ->assertSee('Faut-il un rendez-vous ?')
            ->assertSee('Implant dentaire')
            ->assertSee('Soins')
            ->assertDontSee('Question masquée');
    }
}

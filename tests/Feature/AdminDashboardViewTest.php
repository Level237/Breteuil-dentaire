<?php

namespace Tests\Feature;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_renders_bento_cards_and_fixed_sidebar(): void
    {
        $admin = User::factory()->create(['role' => 'admin', 'name' => 'Dr Dassie']);
        Gallery::factory()->count(3)->create();

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));

        $response->assertOk()
            ->assertSee('admin-sidebar', false)
            ->assertSee('admin-bento-grid', false)
            ->assertSee('Dr Dassie')
            ->assertSee('Galeries')
            ->assertSee('Personnel')
            ->assertSee('État du cabinet')
            ->assertDontSee('Back-Office');
    }
}

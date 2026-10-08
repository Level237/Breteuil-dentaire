<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_gets_404_on_dashboard_instead_of_login_redirect(): void
    {
        $this->get(route('admin.dashboard'))->assertNotFound();
    }

    public function test_classic_admin_login_url_is_not_found(): void
    {
        $this->get('/admin/login')->assertNotFound();
        $this->post('/admin/login', [
            'email' => 'admin@breteuildentaire.fr',
            'password' => 'wrong',
        ])->assertNotFound();
    }

    public function test_login_form_is_served_on_configured_uri(): void
    {
        $this->get(route('admin.login'))
            ->assertOk()
            ->assertSee('Se connecter');

        $this->assertSame(
            '/'.trim((string) config('admin.login_uri'), '/'),
            parse_url(route('admin.login'), PHP_URL_PATH)
        );
        $this->assertNotSame('/admin/login', parse_url(route('admin.login'), PHP_URL_PATH));
    }

    public function test_admin_can_log_in_and_see_dashboard(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@breteuildentaire.fr',
            'password' => 'secret-password',
            'role' => 'admin',
        ]);

        $this->from(route('admin.login'))
            ->post(route('admin.login.store'), [
                'email' => $user->email,
                'password' => 'secret-password',
            ])
            ->assertRedirect('/admin');

        $this->get(route('admin.dashboard'))
            ->assertOk()
            ->assertSee('Tableau de bord')
            ->assertSee('Galeries')
            ->assertSee('Personnel');
    }

    public function test_invalid_credentials_do_not_authenticate(): void
    {
        User::factory()->create([
            'email' => 'admin@breteuildentaire.fr',
            'password' => 'secret-password',
            'role' => 'admin',
        ]);

        $this->from(route('admin.login'))
            ->post(route('admin.login.store'), [
                'email' => 'admin@breteuildentaire.fr',
                'password' => 'wrong',
            ])
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors('email');

        $this->assertGuest();
    }

    public function test_login_is_rate_limited_after_too_many_failures(): void
    {
        User::factory()->create([
            'email' => 'admin@breteuildentaire.fr',
            'password' => 'secret-password',
            'role' => 'admin',
        ]);

        $max = (int) config('admin.login_max_attempts', 5);

        for ($i = 0; $i < $max; $i++) {
            $this->from(route('admin.login'))
                ->post(route('admin.login.store'), [
                    'email' => 'admin@breteuildentaire.fr',
                    'password' => 'wrong',
                ])
                ->assertRedirect(route('admin.login'))
                ->assertSessionHasErrors('email');
        }

        $this->from(route('admin.login'))
            ->post(route('admin.login.store'), [
                'email' => 'admin@breteuildentaire.fr',
                'password' => 'wrong',
            ])
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors('email');

        $this->assertStringContainsString(
            'Trop de tentatives',
            collect(session('errors')->get('email'))->implode(' ')
        );

        $this->assertGuest();
    }
}

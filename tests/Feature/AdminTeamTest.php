<?php

namespace Tests\Feature;

use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminTeamTest extends TestCase
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

    public function test_guest_cannot_open_personnel_admin(): void
    {
        $this->get(route('admin.personnel.index'))
            ->assertNotFound();
    }

    public function test_admin_can_view_personnel_list(): void
    {
        TeamMember::factory()->create([
            'name' => 'Dr Fabrice DASSIE',
            'role' => 'Chirurgien-dentiste',
        ]);

        $this->actingAs($this->admin())
            ->get(route('admin.personnel.index'))
            ->assertOk()
            ->assertSee('Dr Fabrice DASSIE')
            ->assertSee('Chirurgien-dentiste');
    }

    public function test_admin_can_create_team_member_with_photo(): void
    {
        $file = UploadedFile::fake()->image('dassie.png', 400, 500);

        $this->actingAs($this->admin())
            ->post(route('admin.personnel.store'), [
                'name' => 'Dr Fabrice DASSIE',
                'role' => 'Chirurgien-dentiste',
                'slug' => 'docteur-dassie-fabrice',
                'photo' => $file,
                'diplomas_text' => "Diplôme d'implantologie\nCertificat Parodontologie",
                'appointment_url' => 'https://www.doctolib.fr/cabinet',
                'sort_order' => 1,
                'is_active' => 1,
            ])
            ->assertRedirect(route('admin.personnel.index'));

        $this->assertDatabaseHas('team_members', [
            'name' => 'Dr Fabrice DASSIE',
            'slug' => 'docteur-dassie-fabrice',
            'role' => 'Chirurgien-dentiste',
            'appointment_url' => 'https://www.doctolib.fr/cabinet',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $member = TeamMember::query()->first();
        $this->assertNotNull($member);
        $this->assertCount(2, $member->diplomas);
        $this->assertNotNull($member->photo);
        Storage::disk('public')->assertExists($member->photo);
    }

    public function test_admin_can_update_team_member(): void
    {
        $member = TeamMember::factory()->create([
            'name' => 'Dr Ancien',
            'slug' => 'docteur-ancien',
        ]);

        $this->actingAs($this->admin())
            ->put(route('admin.personnel.update', $member), [
                'name' => 'Dr Nouveau',
                'slug' => 'docteur-nouveau',
                'role' => 'Chirurgien-dentiste spécialisé',
                'diplomas_text' => "Nouveau diplôme",
                'is_active' => 1,
                'sort_order' => 5,
            ])
            ->assertRedirect(route('admin.personnel.index'));

        $this->assertDatabaseHas('team_members', [
            'id' => $member->id,
            'name' => 'Dr Nouveau',
            'slug' => 'docteur-nouveau',
        ]);
    }

    public function test_admin_can_delete_team_member(): void
    {
        $member = TeamMember::factory()->create([
            'photo' => 'teams/delete-me.jpg',
        ]);
        Storage::disk('public')->put('teams/delete-me.jpg', 'fake-content');

        $this->actingAs($this->admin())
            ->delete(route('admin.personnel.destroy', $member))
            ->assertRedirect(route('admin.personnel.index'));

        $this->assertDatabaseMissing('team_members', ['id' => $member->id]);
        Storage::disk('public')->assertMissing('teams/delete-me.jpg');
    }

    public function test_public_pages_render_team_members(): void
    {
        $member = TeamMember::factory()->create([
            'name' => 'Dr Mickael ABOULKER',
            'slug' => 'docteur-aboulker-mickael',
            'role' => 'Chirurgien-dentiste',
            'diplomas' => ['Certificat Hospitalier d’Implantologie'],
            'is_active' => true,
        ]);

        $this->get(route('team'))
            ->assertOk()
            ->assertSee('Dr Mickael ABOULKER');

        $this->get(route('team.show', $member->slug))
            ->assertOk()
            ->assertSee('Dr Mickael ABOULKER')
            ->assertSee('Certificat Hospitalier d’Implantologie');

        // Test route historique
        $this->get(route('team.michael'))
            ->assertOk()
            ->assertSee('Dr Mickael ABOULKER');
    }

    public function test_inactive_member_is_not_visible_on_public_pages(): void
    {
        $member = TeamMember::factory()->create([
            'name' => 'Dr Absent',
            'slug' => 'docteur-absent',
            'is_active' => false,
        ]);

        $this->get(route('team'))
            ->assertDontSee('Dr Absent');

        $this->get(route('team.show', $member->slug))
            ->assertNotFound();
    }
}

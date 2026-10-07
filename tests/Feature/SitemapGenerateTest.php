<?php

namespace Tests\Feature;

use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitemapGenerateTest extends TestCase
{
    use RefreshDatabase;

    public function test_sitemap_includes_public_pages_services_and_team(): void
    {
        $service = Service::factory()->create([
            'slug' => 'implant-dentaire',
            'is_published' => true,
        ]);

        Service::factory()->create([
            'slug' => 'soin-brouillon',
            'is_published' => false,
        ]);

        $member = TeamMember::factory()->create([
            'slug' => 'docteur-dassie-fabrice',
            'is_active' => true,
        ]);

        TeamMember::factory()->create([
            'slug' => 'praticien-masque',
            'is_active' => false,
        ]);

        $path = storage_path('framework/testing-sitemap.xml');

        $this->artisan('sitemap:generate', [
            '--path' => $path,
            '--base' => 'https://www.breteuildentaire.fr',
        ])->assertSuccessful();

        $xml = file_get_contents($path);
        $this->assertNotFalse($xml);
        $this->assertStringContainsString('https://www.breteuildentaire.fr/faq', $xml);
        $this->assertStringContainsString('https://www.breteuildentaire.fr/services', $xml);
        $this->assertStringContainsString('https://www.breteuildentaire.fr/services/'.$service->slug, $xml);
        $this->assertStringContainsString('https://www.breteuildentaire.fr/le-cabinet/'.$member->slug, $xml);
        $this->assertStringNotContainsString('soin-brouillon', $xml);
        $this->assertStringNotContainsString('praticien-masque', $xml);
        $this->assertStringNotContainsString('/urgence-dentaire', $xml);
        $this->assertStringContainsString('<image:loc>https://www.breteuildentaire.fr/', $xml);
        $this->assertStringNotContainsString('127.0.0.1', $xml);

        @unlink($path);
    }
}

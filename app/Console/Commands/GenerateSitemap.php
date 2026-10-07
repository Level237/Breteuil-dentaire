<?php

namespace App\Console\Commands;

use App\Models\Service;
use App\Models\TeamMember;
use App\Support\Seo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate {--path=} {--base=https://www.breteuildentaire.fr}';

    protected $description = 'Generate Sitemap';

    public function handle(): int
    {
        $base = rtrim((string) $this->option('base'), '/');
        $path = $this->option('path') ?: public_path('sitemap.xml');

        $sitemap = Sitemap::create();

        $this->addUrl($sitemap, $base, '/', 1.0, Url::CHANGE_FREQUENCY_WEEKLY);
        $this->addUrl($sitemap, $base, '/le-cabinet/notre-equipe', 0.8, Url::CHANGE_FREQUENCY_MONTHLY);
        $this->addUrl($sitemap, $base, '/le-cabinet/visite-cabinet', 0.8, Url::CHANGE_FREQUENCY_MONTHLY);
        $this->addUrl($sitemap, $base, '/services', 0.9, Url::CHANGE_FREQUENCY_WEEKLY);
        $this->addUrl($sitemap, $base, '/faq', 0.6, Url::CHANGE_FREQUENCY_MONTHLY);
        $this->addUrl($sitemap, $base, '/contact', 0.9, Url::CHANGE_FREQUENCY_YEARLY);
        $this->addUrl($sitemap, $base, '/prenez-rendez-vous', 0.8, Url::CHANGE_FREQUENCY_YEARLY);

        if (Schema::hasTable('team_members')) {
            TeamMember::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get()
                ->each(function (TeamMember $member) use ($sitemap, $base) {
                    $url = Url::create($base.'/le-cabinet/'.$member->slug)
                        ->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setLastModificationDate($member->updated_at);

                    if ($member->photo_url) {
                        $url->addImage(Seo::absoluteImage($member->photo_url, $base));
                    }

                    $sitemap->add($url);
                });
        }

        if (Schema::hasTable('services')) {
            Service::query()
                ->published()
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get()
                ->each(function (Service $service) use ($sitemap, $base) {
                    $url = Url::create($base.'/services/'.$service->slug)
                        ->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setLastModificationDate($service->updated_at);

                    if ($service->meta_image_url) {
                        $url->addImage(Seo::absoluteImage($service->meta_image_url, $base));
                    }

                    $sitemap->add($url);
                });
        }

        $sitemap->writeToFile($path);

        $this->info('Sitemap written to '.$path);

        return self::SUCCESS;
    }

    private function addUrl(Sitemap $sitemap, string $base, string $path, float $priority, string $frequency): void
    {
        $sitemap->add(
            Url::create($base.$path)
                ->setPriority($priority)
                ->setChangeFrequency($frequency)
        );
    }
}

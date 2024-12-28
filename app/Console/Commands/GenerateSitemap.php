<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $sitemapGenerator=SitemapGenerator::create('https://viens-yamo.com')->getSitemap();

        $sitemapGenerator->add(Url::create('/')->setPriority(1))
            ->add(Url::create('/le-cabinet/notre-equipe')->setPriority(0.8))
            ->add(Url::create('/le-cabinet/docteur-dassie-fabrice')->setPriority(0.8))
            ->add(Url::create('le-cabinet/docteur-aboulker-mickael')->setPriority(0.8))
            ->add(Url::create('/le-cabinet/visite-cabinet')->setPriority(0.8))
            ->add(Url::create('/urgence-dentaire')->setPriority(0.8))
            ->add(Url::create('/contact')->setPriority(0.9))
            ->add(Url::create('/proteses-dentaires')->setPriority(0.8))
            ->add(Url::create('/implant-dentaire')->setPriority(0.8))
            ->add(Url::create('/remplacer-dent')->setPriority(0.8))
            ->add(Url::create('/remplacer-plusieurs-dents')->setPriority(0.8))
            ->add(Url::create('/remplacer-toutes-ces-dents')->setPriority(0.8))
            ->add(Url::create('/chirugie-pre-implantaire')->setPriority(0.8))
            ->add(Url::create('//conseils-post-operatoires')->setPriority(0.8))
            ->add(Url::create('/faq')->setPriority(0.5))
            ->add(Url::create('/eclaircissement-dentaire')->setPriority(0.8))
            ->add(Url::create('/esthetique-sourire')->setPriority(0.8))
            ->add(Url::create('/facette-dentaire')->setPriority(0.8))
            ->add(Url::create('/facette-pelliculaire')->setPriority(0.8))
            ->add(Url::create('/dentisterie-numerique')->setPriority(0.8))
            ->add(Url::create('/prenez-rendez-vous')->setPriority(0.8))
            ->add(Url::create('/services')->setPriority(0.9));

        $sitemapGenerator->writeToFile(public_path('sitemap.xml'));
    }
}

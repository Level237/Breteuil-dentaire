<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use App\Services\GalleryImageCompressor;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class TeamMemberSeeder extends Seeder
{
    public function run(GalleryImageCompressor $compressor): void
    {
        if (TeamMember::query()->exists()) {
            return;
        }

        $members = [
            [
                'name' => 'Dr Fabrice DASSIE',
                'slug' => 'docteur-dassie-fabrice',
                'role' => 'Chirurgien-dentiste',
                'source_image' => public_path('assets/images/teams/Dr-Fabrice-Dassie.png'),
                'diplomas' => [
                    'Diplôme universitaire d’implantologie Orale et Esthétique - université d’Evry',
                    'Certificat d’études supérieures de Parodontologie - Paris V',
                    'Certificat d’études supérieures de Prothèses fixes - Paris V',
                ],
                'appointment_url' => null,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Dr Mickael ABOULKER',
                'slug' => 'docteur-aboulker-mickael',
                'role' => 'Chirurgien-dentiste',
                'source_image' => public_path('assets/images/teams/Dr-Mickael.png'),
                'diplomas' => [
                    'Certificat Hospitalier d’Implantologie et de Chirurgie Pré/Péri Implantaire de l’Hôpital St – Antoine – Paris VI',
                    'Diplôme Universitaire de Chirurgie Pré et Péri Implantaire – Paris XI',
                    'Diplôme inter-universitaire de reconstruction osseuse implantaire de l\'hôpital pitié Salpêtrière',
                ],
                'appointment_url' => 'https://www.doctolib.fr/cabinet-dentaire/breteuil/cabinet-dentaire-de-l-abbaye-de-breteuil',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Dr Priscile NANA LOWE',
                'slug' => 'docteur-nana-lowe-priscile',
                'role' => 'Chirurgien-dentiste',
                'source_image' => public_path('assets/images/teams/dr-lowe.png'),
                'diplomas' => [
                    'Docteur en chirurgie-dentaire',
                    'Omnipratique et soins dentaires',
                ],
                'appointment_url' => 'https://www.doctolib.fr/cabinet-dentaire/breteuil/cabinet-dentaire-de-l-abbaye-de-breteuil',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($members as $data) {
            $photoPath = null;
            if (File::exists($data['source_image'])) {
                $upload = new UploadedFile(
                    $data['source_image'],
                    basename($data['source_image']),
                    mime_content_type($data['source_image']) ?: 'image/png',
                    null,
                    true
                );
                $photoPath = $compressor->compressAndStore($upload, 'teams');
            }

            TeamMember::query()->create([
                'name' => $data['name'],
                'slug' => $data['slug'],
                'role' => $data['role'],
                'photo' => $photoPath,
                'diplomas' => $data['diplomas'],
                'appointment_url' => $data['appointment_url'],
                'social_links' => null,
                'sort_order' => $data['sort_order'],
                'is_active' => $data['is_active'],
            ]);
        }
    }
}

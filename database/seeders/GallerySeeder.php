<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Services\GalleryImageCompressor;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class GallerySeeder extends Seeder
{
    public function run(GalleryImageCompressor $compressor): void
    {
        if (Gallery::query()->exists()) {
            return;
        }

        $directories = [
            public_path('assets/images/galeries'),
            public_path('assets/images/galeries-news'),
        ];

        $order = 0;

        foreach ($directories as $directory) {
            if (! is_dir($directory)) {
                continue;
            }

            $files = glob($directory.'/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [];
            sort($files);

            foreach ($files as $file) {
                $upload = new UploadedFile(
                    $file,
                    basename($file),
                    mime_content_type($file) ?: 'image/jpeg',
                    null,
                    true
                );

                $path = $compressor->compressAndStore($upload);
                $label = pathinfo($file, PATHINFO_FILENAME);

                Gallery::query()->create([
                    'path' => $path,
                    'alt' => 'Visite du cabinet dentaire de l’Abbaye de Breteuil - '.$label,
                    'sort_order' => $order,
                ]);

                $order++;
            }
        }
    }
}

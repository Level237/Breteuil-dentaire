<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class GalleryImageCompressor
{
    private const MAX_WIDTH = 1920;

    private const JPEG_QUALITY = 75;

    public function compressAndStore(UploadedFile $file, string $directory = 'galleries'): string
    {
        if (! function_exists('imagecreatefromstring') || ! function_exists('imagejpeg')) {
            return $file->store($directory, 'public');
        }

        $realPath = $file->getRealPath();
        $contents = file_get_contents($realPath);
        $source = @imagecreatefromstring($contents);

        if ($source === false) {
            throw ValidationException::withMessages([
                'image' => 'Le fichier image n’a pas pu être lu. Utilisez un JPEG, PNG ou WebP.',
            ]);
        }

        // Corriger automatiquement l'orientation EXIF si présente (évite que les photos de smartphone tournent)
        $source = $this->fixExifOrientation($source, $realPath);

        if (function_exists('imagepalettetotruecolor') && ! imageistruecolor($source)) {
            imagepalettetotruecolor($source);
        }

        $width = imagesx($source);
        $height = imagesy($source);

        if ($width > self::MAX_WIDTH) {
            $newWidth = self::MAX_WIDTH;
            $newHeight = (int) round($height * (self::MAX_WIDTH / $width));
            $resized = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($resized, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($source);
            $source = $resized;
        }

        $relativePath = $directory.'/'.Str::uuid().'.jpg';
        Storage::disk('public')->makeDirectory($directory);
        $absolutePath = Storage::disk('public')->path($relativePath);

        imagejpeg($source, $absolutePath, self::JPEG_QUALITY);
        imagedestroy($source);

        return $relativePath;
    }

    /**
     * Rétablit l'orientation géométrique correcte d'une photo selon ses métadonnées EXIF.
     *
     * @param  \GdImage|resource  $source
     * @return \GdImage|resource
     */
    private function fixExifOrientation($source, string $filePath)
    {
        if (! function_exists('exif_read_data') || ! function_exists('imagerotate')) {
            return $source;
        }

        $exif = @exif_read_data($filePath);
        if (! is_array($exif) || empty($exif['Orientation'])) {
            return $source;
        }

        $orientation = (int) $exif['Orientation'];

        switch ($orientation) {
            case 2: // Miroir horizontal
                if (function_exists('imageflip')) {
                    imageflip($source, \IMAGE_FLIP_HORIZONTAL);
                }
                break;
            case 3: // Rotation 180°
                $rotated = imagerotate($source, 180, 0);
                if ($rotated !== false) {
                    imagedestroy($source);
                    $source = $rotated;
                }
                break;
            case 4: // Miroir vertical
                if (function_exists('imageflip')) {
                    imageflip($source, \IMAGE_FLIP_VERTICAL);
                }
                break;
            case 5: // Miroir horizontal + rotation 90° anti-horaire
                $rotated = imagerotate($source, -90, 0);
                if ($rotated !== false) {
                    imagedestroy($source);
                    $source = $rotated;
                    if (function_exists('imageflip')) {
                        imageflip($source, \IMAGE_FLIP_HORIZONTAL);
                    }
                }
                break;
            case 6: // Rotation 90° horaire (smartphone tenu à la verticale)
                $rotated = imagerotate($source, -90, 0);
                if ($rotated !== false) {
                    imagedestroy($source);
                    $source = $rotated;
                }
                break;
            case 7: // Miroir horizontal + rotation 90° horaire
                $rotated = imagerotate($source, 90, 0);
                if ($rotated !== false) {
                    imagedestroy($source);
                    $source = $rotated;
                    if (function_exists('imageflip')) {
                        imageflip($source, \IMAGE_FLIP_HORIZONTAL);
                    }
                }
                break;
            case 8: // Rotation 90° anti-horaire (270° horaire)
                $rotated = imagerotate($source, 90, 0);
                if ($rotated !== false) {
                    imagedestroy($source);
                    $source = $rotated;
                }
                break;
            default:
                // Orientation 1 : normale, aucune modification
                break;
        }

        return $source;
    }
}

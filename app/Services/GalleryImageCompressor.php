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

        $contents = file_get_contents($file->getRealPath());
        $source = @imagecreatefromstring($contents);

        if ($source === false) {
            throw ValidationException::withMessages([
                'image' => 'Le fichier image n’a pas pu être lu. Utilisez un JPEG, PNG ou WebP.',
            ]);
        }

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
}

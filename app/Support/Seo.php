<?php

namespace App\Support;

class Seo
{
    public const SITE_NAME = 'Breteuil dentaire';

    public const DEFAULT_DESCRIPTION = 'Cabinet dentaire de l’Abbaye de Breteuil. Soins, implantologie et esthétique du sourire.';

    public const DEFAULT_IMAGE = 'assets/images/accueil.jpeg';

    public static function absoluteImage(?string $path, ?string $publicBase = null): string
    {
        $path = trim((string) $path);

        if ($path === '') {
            $path = asset(self::DEFAULT_IMAGE);
        }

        if (str_starts_with($path, '//')) {
            $url = 'https:'.$path;
        } elseif (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            $url = $path;
        } elseif (str_starts_with($path, '/')) {
            $url = url($path);
        } else {
            $url = asset($path);
        }

        $publicBase = $publicBase ? rtrim($publicBase, '/') : null;
        if (! $publicBase) {
            return $url;
        }

        $appUrl = rtrim((string) config('app.url'), '/');
        if ($appUrl !== '' && str_starts_with($url, $appUrl)) {
            return $publicBase.substr($url, strlen($appUrl));
        }

        return $url;
    }
}

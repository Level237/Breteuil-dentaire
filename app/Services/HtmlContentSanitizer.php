<?php

namespace App\Services;

class HtmlContentSanitizer
{
    private const ALLOWED_TAGS = '<p><br><h2><h3><h4><ul><ol><li><strong><b><em><i><u><s><a><img><figure><figcaption><blockquote><span>';

    private const ALLOWED_STYLE_PROPERTIES = [
        'text-align',
        'width',
        'height',
        'max-width',
        'margin',
        'margin-top',
        'margin-bottom',
        'margin-left',
        'margin-right',
        'float',
        'display',
        'border-radius',
        'object-fit',
    ];

    public function sanitize(?string $html): ?string
    {
        if ($html === null) {
            return null;
        }

        $clean = strip_tags($html, self::ALLOWED_TAGS);
        $clean = preg_replace('/\son\w+\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)/i', '', $clean) ?? $clean;
        $clean = preg_replace('/javascript\s*:/i', '', $clean) ?? $clean;
        $clean = $this->sanitizeInlineStyles($clean);
        $clean = preg_replace('/<a\b([^>]*)>/i', '<a$1 rel="noopener noreferrer">', $clean) ?? $clean;

        $trimmed = trim($clean);

        return $trimmed === '' ? null : $trimmed;
    }

    private function sanitizeInlineStyles(string $html): string
    {
        return preg_replace_callback('/style\s*=\s*(["\'])(.*?)\1/i', function (array $match): string {
            $kept = [];

            foreach (explode(';', $match[2]) as $declaration) {
                if (! str_contains($declaration, ':')) {
                    continue;
                }

                [$property, $value] = array_map('trim', explode(':', $declaration, 2));
                $property = strtolower($property);

                if (! in_array($property, self::ALLOWED_STYLE_PROPERTIES, true)) {
                    continue;
                }

                if (preg_match('/expression|javascript|url\s*\(/i', $value) === 1) {
                    continue;
                }

                if ($property === 'text-align' && ! in_array(strtolower($value), ['left', 'center', 'right', 'justify'], true)) {
                    continue;
                }

                $kept[] = $property.': '.$value;
            }

            return $kept === [] ? '' : 'style="'.implode('; ', $kept).'"';
        }, $html) ?? $html;
    }
}

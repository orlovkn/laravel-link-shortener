<?php

declare(strict_types=1);

namespace Orlovdev\LaravelLinkShortener\Services;

use Orlovdev\LaravelLinkShortener\Models\Link;

class LinkGenerateService
{
    public function generateCode(string $link): array
    {
        $record = Link::query()
            ->where('link', $link)
            ->first();

        $code = $record?->code;

        if (!$record) {
            $code = uniqid();

            Link::query()
                ->insert([
                    'code' => $code,
                    'link' => trim($link),
                ]);
        }

        return [
            'code' => $code,
        ];
    }
}

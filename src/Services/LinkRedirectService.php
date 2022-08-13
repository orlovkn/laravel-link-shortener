<?php

declare(strict_types=1);

namespace Orlovdev\LaravelLinkShortener\Services;

use Orlovdev\LaravelLinkShortener\Models\Link;

final class LinkRedirectService
{
    public function generate(string $code): array
    {
        $record = Link::query()
            ->where('code', $code)
            ->first();

        if ($record->doesntExist()) {
            return [
                'error' => 'Link not found'
            ];
        }

        return [
            'link' => $record->link,
        ];
    }
}

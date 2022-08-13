<?php

declare(strict_types=1);

namespace Orlovdev\LaravelLinkShortener\Services;

use Orlovdev\LaravelLinkShortener\Models\Link;

final class LinkRedirectService
{
    public function getLink(string $code): array
    {
        $record = Link::query()
            ->where('code', $code)
            ->first();

        if (!$record) {
            return [
                'error' => 'Link not found'
            ];
        }

        return [
            'link' => $record->link,
        ];
    }
}

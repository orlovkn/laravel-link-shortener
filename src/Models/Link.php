<?php

declare(strict_types=1);

namespace Orlovdev\LaravelLinkShortener\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'link',
        'code',
    ];
}

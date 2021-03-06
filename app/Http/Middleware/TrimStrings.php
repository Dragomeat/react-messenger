<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

/**
 * Class TrimStrings.
 */
class TrimStrings extends Middleware
{
    /**
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}

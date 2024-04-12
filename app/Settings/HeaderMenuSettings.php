<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeaderMenuSettings extends Settings
{
    public array $header_links;

    public static function group(): string
    {
        return 'app';
    }
}
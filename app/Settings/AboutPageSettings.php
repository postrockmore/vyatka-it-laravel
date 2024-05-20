<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutPageSettings extends Settings
{
    public string $title;

    public string $description;

    public array $tags;

    public array $bulits;

    public static function group(): string
    {
        return 'AboutSettings';
    }
}

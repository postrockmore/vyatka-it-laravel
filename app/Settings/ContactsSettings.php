<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactsSettings extends Settings
{
    public string $phone = '';
    public string $email = '';
    public string $messengers = '';
    public string $vk = '';
    public string $telegram = '';
    public string $work_time = '';
    public string $address = '';
    public string $geo;
    public string $behance = '';

    public static function group(): string
    {
        return 'app';
    }
}
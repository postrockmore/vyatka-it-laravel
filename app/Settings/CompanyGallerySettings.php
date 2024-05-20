<?php

namespace App\Settings;

use App\Traits\Models\HasThumbnailMedia;
use Spatie\Image\Manipulations;
use Spatie\LaravelSettings\Settings;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CompanyGallerySettings extends Settings
{
    public array $company = [];

    public static function group(): string
    {
        return 'Gallery';
    }
}

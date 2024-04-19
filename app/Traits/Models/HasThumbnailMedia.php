<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasThumbnailMedia
{

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getFirstMediaUrl('thumbnails')
        );
    }

    protected function thumbnailWebp(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getFirstMediaUrl('thumbnails', 'original_webp')
        );
    }
}

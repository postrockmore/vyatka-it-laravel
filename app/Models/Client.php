<?php

namespace App\Models;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasThumbnailMedia;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Client extends Model implements HasMedia
{
    use HasFactory;
    use HasThumbnailMedia;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'published',
        'order'
    ];

    public function registerMediaConversions( Media $media = null ): void
    {
        $this->addMediaConversion('original_webp')
            ->format(Manipulations::FORMAT_WEBP)
            ->queued();
    }
}


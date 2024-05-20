<?php

namespace App\Models\Service;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasThumbnailMedia;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class ServiceProject extends Model implements HasMedia
{
    use HasFactory;
    use HasThumbnailMedia;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'link',
        'from',
        'to',
        'published',
        'order',
    ];

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    public function registerMediaConversions( Media $media = null ): void
    {
        $this->addMediaConversion('original_webp')
            ->format(Manipulations::FORMAT_WEBP)
            ->queued();
    }
}

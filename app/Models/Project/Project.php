<?php

namespace App\Models\Project;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use App\Traits\Models\HasThumbnailMedia;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Project extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasSlugOptions;
    use HasThumbnailMedia;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'url',
        'published',
        'slug',
        'order'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(ProjectCategory::class);
    }

    public function registerMediaConversions( Media $media = null ): void
    {
        $this->addMediaConversion('original_webp')
            ->format(Manipulations::FORMAT_WEBP)
            ->queued();
    }
}

<?php

namespace App\Models\Service;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Service extends Model implements HasMedia
{
    use HasSlug;
    use HasSlugOptions;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'price',
        'bullits',
        'seo_text',
        'deadlines',
        'published',
        'order',
    ];

    protected $casts = [
        'published' => 'boolean',
        'bullits' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function icon(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getFirstMediaPath('icons')
                ? file_get_contents($this->getFirstMediaPath('icons'))
                : null,
        );
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(ServiceProject::class);
    }
}

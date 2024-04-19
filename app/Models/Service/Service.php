<?php

namespace App\Models\Service;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'published',
        'order',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Service extends Model
{
    use HasSlug;
    use HasSlugOptions;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'published',
        'order',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}

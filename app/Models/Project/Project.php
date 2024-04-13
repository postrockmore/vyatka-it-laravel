<?php

namespace App\Models\Project;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Project extends Model
{
    use HasFactory;
    use HasSlug;
    use HasSlugOptions;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'url',
        'thumbnail',
        'published',
        'slug',
        'order'
    ];

    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class);
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn () => asset('storage/' . $this->attributes['thumbnail']),
        );
    }
}

<?php

namespace App\Models\Project;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class ProjectCategory extends Model
{
    use HasFactory;
    use HasSlug;
    use HasSlugOptions;

    protected $fillable = [
        'title',
        'published',
        'slug',
        'order',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}

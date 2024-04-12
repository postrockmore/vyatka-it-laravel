<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasSlug;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'published',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function getSlugOptions(): SlugOptions {
        return
            SlugOptions::create()
                ->generateSlugsFrom( 'title' )
                ->saveSlugsTo( 'slug' )
                ->doNotGenerateSlugsOnUpdate();
    }
}

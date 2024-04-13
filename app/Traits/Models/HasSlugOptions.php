<?php

namespace App\Traits\Models;

use Spatie\Sluggable\SlugOptions;

trait HasSlugOptions
{
    public function getSlugOptions(): SlugOptions {
        return
            SlugOptions::create()
                ->generateSlugsFrom( 'title' )
                ->saveSlugsTo( 'slug' )
                ->doNotGenerateSlugsOnUpdate();
    }
}

<?php

namespace App\Models\Service;

use App\Traits\Models\HasSlugOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;

class ServiceCategory extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasSlugOptions;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'color',
        'slug',
        'description',
        'excerpt',
        'published',
        'order',
        'parent_id',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }

    public function childrens(): HasMany
    {
        return $this->hasMany(ServiceCategory::class, 'parent_id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    public function icon(): Attribute
    {
        return Attribute::make(
            get: fn($value) => file_get_contents($this->getFirstMediaPath('icon')),
        );
    }

    public function iconAlt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => file_get_contents($this->getFirstMediaPath('icon_alt')),
        );
    }
}

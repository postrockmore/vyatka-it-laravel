<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'published'
    ];

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn () => asset('storage/' . $this->attributes['thumbnail']),
        );
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ScopedBy([PublishedScope::class, OrderingScope::class])]
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'published',
        'order'
    ];

    protected function icon(): Attribute
    {
        return Attribute::make(
            get: fn () => asset('storage/' . $this->attributes['thumbnail']),
        );
    }
}

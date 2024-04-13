<?php

namespace App\Traits\Filament\Resources;

use App\Models\Scopes\OrderingScope;
use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait HasWithoutGlobladScopes
{

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([
            PublishedScope::class,
            OrderingScope::class
        ]);
    }
}

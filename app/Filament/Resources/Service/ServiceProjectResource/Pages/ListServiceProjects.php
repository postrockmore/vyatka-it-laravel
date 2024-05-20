<?php

namespace App\Filament\Resources\Service\ServiceProjectResource\Pages;

use App\Filament\Resources\Service\ServiceProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceProjects extends ListRecords
{
    protected static string $resource = ServiceProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Service\ServiceProjectResource\Pages;

use App\Filament\Resources\Service\ServiceProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceProject extends EditRecord
{
    protected static string $resource = ServiceProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

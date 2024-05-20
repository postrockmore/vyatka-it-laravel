<?php

namespace App\Filament\Pages;

use App\Settings\CompanyGallerySettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageCompanyGallery extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static string $settings = CompanyGallerySettings::class;

    protected static ?string $label                = 'Галерея студии';
    protected static ?string $navigationLabel      = 'Галерея студии';

    protected ?string $heading      = 'Галерея студии';

    protected static ?string $navigationGroup = 'Контент';
    protected static ?int $navigationSort = 52;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\FileUpload::make('company')
                        ->multiple()
                        ->reorderable()
                        ->label('')
                ])->columnSpanFull()
            ]);
    }
}

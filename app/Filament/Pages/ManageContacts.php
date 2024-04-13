<?php

namespace App\Filament\Pages;

use App\Settings\ContactsSettings;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Facades\Cache;

class ManageContacts extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static string $settings = ContactsSettings::class;

    protected static ?string $label                = 'Контакты';
    protected static ?string $navigationLabel      = 'Контакты';

    protected ?string $heading      = 'Контакты';

    protected static ?string $navigationGroup = 'Конфигурация';
    protected static ?int $navigationSort = 900;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Forms\Components\Section::make()->schema([
                        TextInput::make('phone')
                            ->label('Телефон'),
                        TextInput::make('email')
                            ->label('E-Mail'),
                        TextInput::make('messengers')
                            ->label('Мессенджеры'),

                        TextInput::make('vk')
                            ->label('ВКонтакте'),
                        TextInput::make('telegram')
                            ->label('Телеграм'),
                        TextInput::make('behance')
                            ->label('Behance'),
                    ])->columns(2)->columnSpan(4),

                    Forms\Components\Section::make('География')->schema([
                        Textarea::make('address')
                            ->label('Адрес'),
                        Textarea::make('work_time')
                            ->label('График работы'),
                        TextInput::make('geo')
                            ->label('Точка на карте'),
                    ])->columnSpan(2)
                ])->columns(6)
            ]);
    }
}

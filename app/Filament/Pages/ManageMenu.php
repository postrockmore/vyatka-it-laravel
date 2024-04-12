<?php

namespace App\Filament\Pages;

use App\Settings\HeaderMenuSettings;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Facades\Cache;

class ManageMenu extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-bars-3';

    protected static string $settings = HeaderMenuSettings::class;

    protected static ?string $label                = 'Меню';
    protected static ?string $navigationLabel      = 'Меню';

    protected ?string $heading      = 'Меню';

    protected static ?string $navigationGroup = 'Конфигурация';
    protected static ?int $navigationSort = 900;


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('header_links')->schema([
                    Grid::make()
                        ->schema([
                            TextInput::make('label')
                                ->label('Заголовок'),
                            TextInput::make('url')
                                ->label('Ссылка'),
                            Toggle::make('blank')
                                ->label('В новой вкладке'),
                            TextInput::make('tag')
                                ->label('Тэг (например 100)')
                        ])->columns(4),
                ])
                    ->label('Ссылки')
                    ->columnSpanFull()
                    ->addActionLabel('+')
            ]);
    }

    public function mutateFormDataBeforeSave($data) : array
    {
        Cache::set('menu', $data);

        return  $data;
    }
}

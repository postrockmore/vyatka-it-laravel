<?php

namespace App\Filament\Pages;

use App\Settings\AboutPageSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\View\View;

class ManageAboutPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static string $settings = AboutPageSettings::class;

    protected static ?string $label                = 'О студии';
    protected static ?string $navigationLabel      = 'О студии';

    protected ?string $heading      = 'О студии';

    protected static ?string $navigationGroup = 'Страницы';
    protected static ?int $navigationSort = 40;

    public function getHeader(): ?View
    {
        return view('filament.admin.header_with_route_bage', [
            'heading' => $this->heading,
            'route' => url('about'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        Forms\Components\Grid::make()->schema([
                            Forms\Components\TextInput::make('title')
                                ->label('Заголовок'),
                            Forms\Components\Textarea::make('description')
                                ->label('Описание'),
                        ]),
                        Forms\Components\TagsInput::make('tags')
                            ->label('Теги'),
                    ]),
                    Forms\Components\Section::make()->schema([
                        Forms\Components\Repeater::make('bulits')
                            ->schema([
                                Forms\Components\Grid::make()->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->label('Заголовок'),
                                    Forms\Components\TextInput::make('description')
                                        ->label('Описание'),
                                    Forms\Components\TextInput::make('link')
                                        ->label('Ссылка'),
                                ])->columns(3)
                            ])
                            ->label('Пункты'),
                    ])
                ])->columnSpanFull()
            ]);
    }
}

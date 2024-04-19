<?php

namespace App\Filament\Resources\Service;

use App\Filament\Resources\Service\ServiceResource\Pages;
use App\Filament\Resources\Service\ServiceResource\RelationManagers;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $label = 'Услуга';
    protected static ?string $navigationLabel = 'Услуги';
    protected static ?string $pluralLabel = 'Услуги';
    protected static ?string $navigationGroup = 'Услуги';
    protected static ?int $navigationSort = 100;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema([
                    Section::make('Содержание')->schema([
                        Forms\Components\Grid::make()->schema([
                            Forms\Components\TextInput::make('title')
                                ->label('Название'),
                            Forms\Components\TextInput::make('slug')
                                ->label('Слаг')
                                ->prefix('/'),
                        ])->columns(2),
                        Forms\Components\MarkdownEditor::make('content')
                            ->label('Описание'),
                    ])->columnSpan(2),
                    Forms\Components\Group::make()->schema([
                        Section::make()->schema([
                            Forms\Components\Toggle::make('published')
                                ->label('Опубликовано'),
                            TextInput::make('order')
                                ->numeric()
                                ->label('Порядок'),
                        ]),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->collection('thumbnails')
                            ->label('Изображение')
                            ->image(),
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'title')
                            ->options(ServiceCategory::all()->pluck('title', 'id'))
                            ->label('Категория')
                            ->native(false)
                            ->preload(),
                    ])->columnSpan(1)
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Название'),
                Tables\Columns\ToggleColumn::make('published')
                    ->label('Активность')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order')
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}

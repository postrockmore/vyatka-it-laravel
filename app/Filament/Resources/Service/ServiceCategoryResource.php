<?php

namespace App\Filament\Resources\Service;

use App\Filament\Resources\Service\ServiceCategoryResource\Pages;
use App\Filament\Resources\Service\ServiceCategoryResource\RelationManagers;
use App\Models\Service\ServiceCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceCategoryResource extends Resource
{
    protected static ?string $model = ServiceCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    protected static ?string $label = 'Категория';
    protected static ?string $navigationLabel = 'Категории';
    protected static ?string $pluralLabel = 'Категории';
    protected static ?string $navigationGroup = 'Услуги';
    protected static ?int $navigationSort = 101;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema( [
                    Forms\Components\Section::make('Содержание')->schema( [
                        Forms\Components\Grid::make()->schema( [
                            Forms\Components\TextInput::make('title')
                                ->label('Название')
                                ->required()->columnSpan(6),
                            Forms\Components\ColorPicker::make('color')
                                ->label('Цвет')->columnSpan(2),
                        ])->columns(8),

                        Forms\Components\Textarea::make('excerpt')
                            ->label('Короткое описание'),
                        Forms\Components\RichEditor::make('description')
                            ->label('Описание')
                    ])->columnSpan(2),
                    Forms\Components\Group::make()->schema( [
                        Section::make()->schema([
                            Forms\Components\Toggle::make('published')
                                ->label('Опубликовано'),
                            TextInput::make('order')
                                ->numeric()
                                ->default(0)
                                ->label('Порядок'),
                        ]),
                        Forms\Components\Grid::make()->schema([
                            SpatieMediaLibraryFileUpload::make('icon')
                                ->collection('icon')
                                ->label('Иконка')
                                ->image(),
                            SpatieMediaLibraryFileUpload::make('icon_alt')
                                ->collection('icon_alt')
                                ->label('Иконка (Альтернативная)')
                                ->image(),
                        ])->columns(2),
                        SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->collection('thumbnails')
                            ->label('Изображение'),

                        Section::make()->schema([
                            Forms\Components\Select::make('parent_id')
                                ->label('Родительская категория')
                                ->options(ServiceCategory::all()->pluck('title', 'id'))
                                ->native(false)
                                ->preload(),
                        ])
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
                Tables\Columns\TextColumn::make('parent.title')
                    ->label('Родительская категория')
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
            'index' => Pages\ListServiceCategories::route('/'),
            'create' => Pages\CreateServiceCategory::route('/create'),
            'edit' => Pages\EditServiceCategory::route('/{record}/edit'),
        ];
    }
}

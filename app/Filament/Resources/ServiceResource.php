<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Section;
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
                    Section::make()->schema([
                        Forms\Components\Toggle::make('published')
                            ->label('Опубликовано'),
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Изображение')
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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

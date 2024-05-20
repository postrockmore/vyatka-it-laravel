<?php

namespace App\Filament\Resources\Service;

use App\Filament\Resources\Service\ServiceResource\Pages;
use App\Filament\Resources\Service\ServiceResource\RelationManagers;
use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
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

    public static function form( Form $form ): Form
    {
        return $form
            ->schema( [
                Forms\Components\Grid::make()->schema( [
                    Forms\Components\Group::make()->schema( [
                        Section::make( 'Содержание' )->schema( [
                            Forms\Components\Grid::make()->schema( [
                                Forms\Components\TextInput::make( 'title' )
                                    ->label( 'Название' ),

                                Forms\Components\TextInput::make( 'slug' )
                                    ->label( 'Слаг' )
                                    ->prefix( '/' ),
                            ] )->columns( 2 ),

                            Forms\Components\Textarea::make( 'excerpt' )
                                ->label( 'Короткое описание' ),

                            Forms\Components\RichEditor::make( 'description' )
                                ->label( 'Описание' ),
                        ] )->collapsed(false),
                        Section::make( 'Информация' )->schema( [
                            TextInput::make( 'price' )
                                ->label( 'Цена' ),
                            TextInput::make( 'deadlines' )
                                ->label( 'Сроки' ),
                            Repeater::make('bullits')->schema([
                                TextInput::make('name')->label('Название'),
                                Forms\Components\Textarea::make('text')->label('Текст'),
                            ])->label('Список'),
                            Forms\Components\RichEditor::make('seo_text')
                                ->label('SEO текст')
                        ] )->collapsed()
                    ] )->columnSpan( 2 ),
                    Forms\Components\Group::make()->schema( [
                        Section::make()->schema( [
                            Forms\Components\Toggle::make( 'published' )
                                ->label( 'Опубликовано' ),
                        ] ),
                        Forms\Components\SpatieMediaLibraryFileUpload::make( 'icon' )
                            ->collection( 'icons' )
                            ->label( 'Иконка' )
                            ->image(),
                        Forms\Components\SpatieMediaLibraryFileUpload::make( 'thumbnail' )
                            ->collection( 'thumbnails' )
                            ->label( 'Изображение' )
                            ->image(),
                        Forms\Components\Select::make( 'category_id' )
                            ->relationship( 'category', 'title' )
                            ->options( ServiceCategory::all()->pluck( 'title', 'id' ) )
                            ->label( 'Категория' )
                            ->native( false )
                            ->preload(),
                        Forms\Components\Select::make('projects')
                            ->relationship('projects', 'title')
                            ->multiple()
                            ->preload()
                            ->label('Проекты')
                    ] )->columnSpan( 1 )
                ] )->columns( 3 )
            ] );
    }

    public static function table( Table $table ): Table
    {
        return $table
            ->columns( [
                Tables\Columns\TextColumn::make( 'title' )
                    ->label( 'Название' ),
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Категория'),
                Tables\Columns\ToggleColumn::make( 'published' )
                    ->label( 'Активность' )
            ] )
            ->filters( [
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'title')
                    ->label('Категория'),
                Tables\Filters\TernaryFilter::make('published')
                    ->label('Активность'),
            ] )
            ->actions( [
                Tables\Actions\EditAction::make(),
            ] )
            ->bulkActions( [
                Tables\Actions\BulkActionGroup::make( [
                    Tables\Actions\DeleteBulkAction::make(),
                ] ),
            ] )
            ->defaultSort( 'order' )
            ->reorderable( 'order' );
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
            'index' => Pages\ListServices::route( '/' ),
            'create' => Pages\CreateService::route( '/create' ),
            'edit' => Pages\EditService::route( '/{record}/edit' ),
        ];
    }
}

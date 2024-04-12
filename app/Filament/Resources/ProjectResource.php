<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Проект';
    protected static ?string $navigationLabel = 'Проекты';
    protected static ?string $pluralLabel = 'Проекты';

    public static function form( Form $form ): Form
    {
        return $form
            ->schema( [
                Forms\Components\Grid::make()->schema( [
                    Section::make()->schema( [
                        TextInput::make( 'title' )
                            ->label( 'Название' ),
                        TextInput::make( 'url' )
                            ->label( 'Ссылка на проект' ),
                        Forms\Components\Textarea::make( 'excerpt' )
                            ->label( 'Описание' )
                            ->columnSpan( 2 ),
                        Forms\Components\RichEditor::make( 'content' )
                            ->label( 'Конент' )
                            ->columnSpan( 2 )
                            ->fileAttachmentsDirectory( 'project-attachments' )
                            ->fileAttachmentsVisibility( 'public' )
                    ] )
                        ->columns( 2 )
                        ->columnSpan( 2 ),
                    Section::make()->schema( [
                        Toggle::make( 'published' )
                            ->label( 'Опубликован' ),
                        FileUpload::make( 'thumbnail' )
                            ->label( 'Изображение' )
                            ->image(),
                    ] )->columnSpan( 1 )
                ] )->columns( 3 )
            ] );
    }

    public static function table( Table $table ): Table
    {
        return $table
            ->columns( [
                ImageColumn::make( 'thumbnail' )
                    ->label( 'Изображение' ),
                TextColumn::make( 'title' )
                    ->label( 'Название' ),
                ToggleColumn::make( 'published' )
                    ->label( 'Опубликован' ),
            ] )
            ->filters( [
                //
            ] )
            ->actions( [
                Tables\Actions\EditAction::make(),
            ] )
            ->bulkActions( [
                Tables\Actions\BulkActionGroup::make( [
                    Tables\Actions\DeleteBulkAction::make(),
                ] ),
            ] );
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
            'index' => Pages\ListProjects::route( '/' ),
            'create' => Pages\CreateProject::route( '/create' ),
            'edit' => Pages\EditProject::route( '/{record}/edit' ),
        ];
    }
}

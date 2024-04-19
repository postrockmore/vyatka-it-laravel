<?php

namespace App\Filament\Resources\Project;

use App\Filament\Resources\Project\ProjectResource\Pages;
use App\Filament\Resources\Project\ProjectResource\RelationManagers;
use App\Models\Project\Project;
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

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $label = 'Проект';
    protected static ?string $navigationLabel = 'Проекты';
    protected static ?string $pluralLabel = 'Проекты';
    protected static ?string $navigationGroup = 'Проекты';

    protected static ?int $navigationSort = 300;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema( [
                    Section::make()->schema( [
                        Forms\Components\Grid::make()->schema( [
                            TextInput::make( 'title' )
                                ->label( 'Название' )
                                ->required(),
                            Forms\Components\TextInput::make( 'slug' )
                                ->label( 'Слаг' )
                                ->prefix( '/' ),
                        ] )->columns( 2 ),
                        TextInput::make( 'url' )
                            ->label( 'Ссылка на проект' ),
                        Forms\Components\Textarea::make( 'excerpt' )
                            ->label( 'Описание' ),
                        Forms\Components\RichEditor::make( 'content' )
                            ->label( 'Конент' )
                            ->fileAttachmentsDirectory( 'project-attachments' )
                            ->fileAttachmentsVisibility( 'public' )
                    ] )
                        ->columnSpan( 2 ),
                    Forms\Components\Grid::make()->schema( [
                        Section::make()->schema( [
                            Toggle::make( 'published' )
                                ->label( 'Опубликован' ),
                            TextInput::make('order')
                                ->numeric()
                                ->label('Порядок'),
                        ] ),

                        Forms\Components\SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->collection('thumbnails')
                            ->label('Изображение')
                            ->image(),

                        Section::make()->schema( [
                            Forms\Components\Select::make('categories')
                                ->relationship('categories', 'title')
                                ->label('Категории')
                                ->multiple()
                                ->preload()
                                ->required()
                        ])
                    ])
                        ->columns(1)
                        ->columnSpan( 1 )

                ] )->columns( 3 )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make( 'thumbnail' )
                    ->label( 'Изображение' ),
                TextColumn::make( 'title' )
                    ->label( 'Название' ),
                TextColumn::make('categories.title')
                    ->label('Категории')
                    ->badge()
                    ->color('primary'),
                ToggleColumn::make( 'published' )
                    ->label( 'Опубликован' ),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('published', true)->count();
    }
}

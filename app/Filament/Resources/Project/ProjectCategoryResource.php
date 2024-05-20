<?php

namespace App\Filament\Resources\Project;

use App\Filament\Resources\Project\ProjectCategoryResource\Pages;
use App\Filament\Resources\Project\ProjectCategoryResource\RelationManagers\ProjectsRelationManager;
use App\Models\Project\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    protected static ?string $label = 'Категория';
    protected static ?string $navigationLabel = 'Категории';
    protected static ?string $pluralLabel = 'Категории';
    protected static ?string $navigationGroup = 'Проекты';
    protected static ?int $navigationSort = 301;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema( [
                    Section::make()->schema( [
                        TextInput::make( 'title' )
                            ->label( 'Название' ),
                        Forms\Components\TextInput::make('slug')
                            ->label('Слаг')
                            ->prefix('/'),
                    ] )
                        ->columnSpan( 2 ),
                    Section::make()->schema( [
                        Toggle::make( 'published' )
                            ->label( 'Опубликована' ),
                    ] )->columnSpan( 1 )
                ] )->columns( 3 )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make( 'title' )
                    ->label( 'Название' ),
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
            ProjectsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}

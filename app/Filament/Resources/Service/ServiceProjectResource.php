<?php

namespace App\Filament\Resources\Service;

use App\Filament\Resources\Service\ServiceProjectResource\Pages;
use App\Filament\Resources\Service\ServiceProjectResource\RelationManagers;
use App\Models\Service\ServiceCategory;
use App\Models\Service\ServiceProject;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceProjectResource extends Resource
{
    protected static ?string $model = ServiceProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $label = 'Проект услуги';
    protected static ?string $navigationLabel = 'Проект услуги';
    protected static ?string $pluralLabel = 'Проект услуги';
    protected static ?string $navigationGroup = 'Услуги';
    protected static ?int $navigationSort = 102;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema( [
                    Forms\Components\Group::make()
                        ->schema([
                            Forms\Components\Section::make()->schema( [
                                Forms\Components\Grid::make()->schema([
                                    TextInput::make('title')
                                        ->label('Название'),
                                    TextInput::make('link')
                                        ->label('Ссылка'),
                                ])->columns(2),
                                SpatieMediaLibraryFileUpload::make('thumbnail')
                                    ->collection('thumbnails')
                                    ->label('Изображение'),
                                Forms\Components\RichEditor::make('description')
                                    ->label('Описание'),
                            ]),
                            Section::make('Информация')->schema([
                                Forms\Components\Textarea::make('from')
                                    ->label('Было'),
                                Forms\Components\Textarea::make('to')
                                    ->label('Стало'),
                            ])
                        ])->columnSpan(2),
                    Forms\Components\Group::make()->schema( [
                        Section::make()->schema([
                            Forms\Components\Toggle::make('published')
                                ->label('Опубликовано'),
                        ]),
                    ])->columnSpan(1)
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Название'),
                Tables\Columns\ToggleColumn::make('published')
                    ->label('Опубликовано'),
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
            'index' => Pages\ListServiceProjects::route('/'),
            'create' => Pages\CreateServiceProject::route('/create'),
            'edit' => Pages\EditServiceProject::route('/{record}/edit'),
        ];
    }
}

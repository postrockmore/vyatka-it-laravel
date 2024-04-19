<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromotionResource\Pages;
use App\Filament\Resources\PromotionResource\RelationManagers;
use App\Models\Promotion;
use App\Traits\Filament\Resources\HasWithoutGlobladScopes;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromotionResource extends Resource
{
    use HasWithoutGlobladScopes;

    protected static ?string $model = Promotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-receipt-percent';

    protected static ?string $label = 'Акция';
    protected static ?string $navigationLabel = 'Акции';
    protected static ?string $pluralLabel = 'Акции';

    protected static ?string $navigationGroup = 'Информация';

    protected static ?int $navigationSort = 51;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()->schema([
                    Section::make()->schema([
                        TextInput::make('title')
                            ->label('Название'),
                    ])->columnSpan(2),
                    Forms\Components\Group::make()->schema([
                        Section::make()->schema([
                            Toggle::make('published')
                                ->label('Опубликован'),
                            TextInput::make('order')
                                ->numeric()
                                ->label('Порядок'),
                        ]),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->collection('thumbnails')
                            ->label('Изображение')
                            ->image(),
                    ])->columnSpan(1)
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('thumbnails'),
                TextColumn::make('title')
                    ->label('Название'),
                ToggleColumn::make('published')
                    ->label('Опубликован'),
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
            ->reorderable('order');;
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
            'index' => Pages\ListPromotions::route('/'),
            'create' => Pages\CreatePromotion::route('/create'),
            'edit' => Pages\EditPromotion::route('/{record}/edit'),
        ];
    }
}

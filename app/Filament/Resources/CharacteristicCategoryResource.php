<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharacteristicCategoryResource\Pages;
use App\Filament\Resources\CharacteristicCategoryResource\RelationManagers;
use App\Models\CharacteristicCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharacteristicCategoryResource extends Resource
{
    protected static ?string $model = CharacteristicCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListCharacteristicCategories::route('/'),
            'create' => Pages\CreateCharacteristicCategory::route('/create'),
            'edit' => Pages\EditCharacteristicCategory::route('/{record}/edit'),
        ];
    }
}

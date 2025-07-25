<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharacterisitcResource\Pages;
use App\Filament\Resources\CharacterisitcResource\RelationManagers;
use App\Models\Characterisitc;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharacterisitcResource extends Resource
{
    protected static ?string $model = Characterisitc::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('meta_data.description')
                        ->label('Description')
                        ->required(),
                    Forms\Components\Select::make('meta_data.type')
                        ->label('Type')
                        ->options([
                            'boolean' => 'Boolean',
                            'integer' => 'Integer',
                            'string' => 'String',
                            'float' => 'Float',
                            'date' => 'Date',
                        ])
                        ->required(),
                ])->columnSpanFull(),
                Forms\Components\Select::make('characteristic_category_id')
                    ->relationship('characteristicCategory', 'name')
                    ->required(),
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
            'index' => Pages\ListCharacterisitcs::route('/'),
            'create' => Pages\CreateCharacterisitc::route('/create'),
            'edit' => Pages\EditCharacterisitc::route('/{record}/edit'),
        ];
    }
}

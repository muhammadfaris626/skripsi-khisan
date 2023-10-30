<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColumnListResource\Pages;
use App\Filament\Resources\ColumnListResource\RelationManagers;
use App\Models\ColumnList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColumnListResource extends Resource
{
    protected static ?string $model = ColumnList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_achievement_id')
                    ->relationship('categoryAchievement', 'name')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('column_a')
                    ->maxLength(255),
                Forms\Components\TextInput::make('column_b')
                    ->maxLength(255),
                Forms\Components\TextInput::make('column_c')
                    ->maxLength(255),
                Forms\Components\TextInput::make('column_d')
                    ->maxLength(255),
                Forms\Components\TextInput::make('column_e')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categoryAchievement.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order')
                    ->searchable(),
                Tables\Columns\TextColumn::make('column_a')
                    ->searchable(),
                Tables\Columns\TextColumn::make('column_b')
                    ->searchable(),
                Tables\Columns\TextColumn::make('column_c')
                    ->searchable(),
                Tables\Columns\TextColumn::make('column_d')
                    ->searchable(),
                Tables\Columns\TextColumn::make('column_e')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListColumnLists::route('/'),
            'create' => Pages\CreateColumnList::route('/create'),
            'edit' => Pages\EditColumnList::route('/{record}/edit'),
        ];
    }    
}

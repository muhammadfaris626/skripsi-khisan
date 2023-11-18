<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Karyawan')->schema([
                    TextInput::make('registration_number')->required()->unique(ignoreRecord: true)->label('Nomor Induk Karyawan'),
                    TextInput::make('name')->required()->label('Nama Lengkap'),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true),
                    Select::make('outlet_id')->relationship('outlet', 'name')->required()->label('Toko'),
                    Select::make('position_id')->relationship('position', 'name')->required()->label('Posisi Jabatan'),
                    Select::make('grade_id')->relationship('grade', 'name')->required()->label('Golongan')
                ])->columnSpan(1),
                Section::make('Data Sertifikat')->schema([
                    Repeater::make('certificates')->label('Certificate List')->relationship()->schema([
                        TextInput::make('name')->required()->label('Nama Sertifikat'),
                        DatePicker::make('certificate_date')->required()->label('Tanggal Sertifikat'),
                        FileUpload::make('file')
                            ->directory('certificate-file')
                            ->required()
                            ->label('Berkas')
                    ])->columns(3)->label('Daftar Sertifikat')
                ])->columnSpan(2)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('registration_number')
                    ->searchable()->label('Nomor Induk Karyawan'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()->label('Nama Lengkap'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position.name')
                    ->numeric()
                    ->sortable()
                    ->label('Posisi Jabatan'),
                Tables\Columns\TextColumn::make('grade.name')
                    ->numeric()
                    ->sortable()
                    ->label('Golongan'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Tanggal dibuat'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Tanggal diperbarui'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'view' => Pages\ViewEmployee::route('/{record}'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return "Karyawan";
    }
}

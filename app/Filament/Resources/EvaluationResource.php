<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvaluationResource\Pages;
use App\Filament\Resources\EvaluationResource\RelationManagers;
use App\Models\CategoryAchievement;
use App\Models\Evaluation;
use Closure;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class EvaluationResource extends Resource
{
    protected static ?string $model = Evaluation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $aa = 100;
        return $form
            ->schema([
                Section::make('Employee')->schema([
                    Select::make('employee_id')
                        ->relationship('employee', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),
                    DatePicker::make('evaluation_date')->required(),
                    Select::make('assessment_period')->options([
                        '1' => 'January',
                        '2' => 'February',
                        '3' => 'March',
                        '4' => 'April',
                        '5' => 'May',
                        '6' => 'June',
                        '7' => 'July',
                        '8' => 'August',
                        '9' => 'September',
                        '10' => 'October',
                        '11' => 'November',
                        '12' => 'December'
                    ])
                ])->columns(3),
                Section::make('Evaluation')->schema([
                    Repeater::make('evaluationLists')->relationship()->schema([
                        Select::make('category_achievement_id')
                            ->label('Category Achievement')
                            ->live()
                            ->searchable()
                            ->required()
                            ->options(CategoryAchievement::pluck('name', 'id')->toArray())
                            ->disableOptionWhen(function($value, $state, Get $get) {
                                return collect($get('../*.category_achievement_id'))
                                    ->reject(fn($id) => $id == $state)
                                    ->filter()
                                    ->contains($value);
                            }),
                            TextInput::make('score')
                                ->required()
                                ->numeric()
                                ->live()
                                ->afterStateUpdated(function($state, callable $set, callable $get) {
                                    if ($state == null) {
                                        $set('final_score', 0);
                                    }else{
                                        if ($get('category_achievement_id') == null) {
                                            Notification::make()->title('Please fill in the category achievement first')->danger()->send();
                                        }else {
                                            $category = CategoryAchievement::where('id', $get('category_achievement_id'))->first();
                                            $hasil = ($state*$category->quality)/100;
                                            $set('final_score', $hasil);
                                        }
                                    }
                                }),
                            TextInput::make('final_score')
                                ->required(),
                            TextInput::make('description')->required()
                    ])
                    ->columns(4)
                    ->itemLabel(fn(array $state): ?string => CategoryAchievement::where('id', $state['category_achievement_id'])->first()->name ?? null)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee.registration_number')->searchable(),
                TextColumn::make('employee.name')->searchable(),
                TextColumn::make('evaluation_date')
                    ->searchable()
                    ->formatStateUsing(fn(string $state): string => date_format(date_create($state), "d M Y")),
                TextColumn::make('assessment_period')->formatStateUsing(fn(string $state): string => DateTime::createFromFormat('!m', $state)->format('F'))
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Download')
                    ->icon('heroicon-m-arrow-down-tray')
                    ->color('info')
                    ->url(fn(Evaluation $record) => route('download.evaluation', $record))->openUrlInNewTab(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListEvaluations::route('/'),
            'create' => Pages\CreateEvaluation::route('/create'),
            'view' => Pages\ViewEvaluation::route('/{record}'),
            'edit' => Pages\EditEvaluation::route('/{record}/edit'),
        ];
    }
}

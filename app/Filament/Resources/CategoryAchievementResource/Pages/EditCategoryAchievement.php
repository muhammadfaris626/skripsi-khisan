<?php

namespace App\Filament\Resources\CategoryAchievementResource\Pages;

use App\Filament\Resources\CategoryAchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryAchievement extends EditRecord
{
    protected static string $resource = CategoryAchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

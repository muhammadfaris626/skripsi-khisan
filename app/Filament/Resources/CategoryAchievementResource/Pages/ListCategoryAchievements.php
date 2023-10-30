<?php

namespace App\Filament\Resources\CategoryAchievementResource\Pages;

use App\Filament\Resources\CategoryAchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryAchievements extends ListRecords
{
    protected static string $resource = CategoryAchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CategoryAchievementResource\Pages;

use App\Filament\Resources\CategoryAchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryAchievement extends CreateRecord
{
    protected static string $resource = CategoryAchievementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

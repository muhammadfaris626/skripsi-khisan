<?php

namespace App\Filament\Resources\ColumnListResource\Pages;

use App\Filament\Resources\ColumnListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColumnLists extends ListRecords
{
    protected static string $resource = ColumnListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

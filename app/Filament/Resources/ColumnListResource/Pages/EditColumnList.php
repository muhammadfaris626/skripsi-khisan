<?php

namespace App\Filament\Resources\ColumnListResource\Pages;

use App\Filament\Resources\ColumnListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColumnList extends EditRecord
{
    protected static string $resource = ColumnListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

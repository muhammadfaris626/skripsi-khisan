<?php

namespace App\Filament\Resources\OutletResource\Pages;

use App\Filament\Resources\OutletResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOutlet extends CreateRecord
{
    protected static string $resource = OutletResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

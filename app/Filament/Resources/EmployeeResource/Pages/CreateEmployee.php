<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
        $user = new User;
        $user->username = $this->record->registration_number;
        $user->name = $this->record->name;
        $user->email = $this->record->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($this->record->registration_number);
        $user->save();
        $user->assignRole('crew');
    }
}

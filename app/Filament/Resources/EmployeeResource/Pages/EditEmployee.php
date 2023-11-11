<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditEmployee extends EditRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function beforeSave(): void
    {
        $user = User::where('username', $this->record->registration_number)->first();
        $user->username = $this->data['registration_number'];
        $user->name = $this->data['name'];
        $user->email = $this->data['email'];
        $user->email_verified_at = now();
        $user->password = Hash::make($this->data['registration_number']);
        $user->update();
    }
}

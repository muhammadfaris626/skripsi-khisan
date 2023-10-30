<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as CursomPermission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends CursomPermission
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name'];
}

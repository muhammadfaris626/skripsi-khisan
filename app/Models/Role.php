<?php

namespace App\Models;

use Spatie\Permission\Models\Role as CustomRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends CustomRole
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name'];
}

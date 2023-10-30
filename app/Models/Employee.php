<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['registration_number', 'name', 'email', 'outlet_id', 'position_id', 'grade_id'];

    public function outlet(): BelongsTo {
        return $this->belongsTo(Outlet::class, 'outlet_id');
    }

    public function position(): BelongsTo {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function grade(): BelongsTo {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function certificates(): HasMany {
        return $this->hasMany(Certificate::class);
    }

    public function evaluations(): HasMany {
        return $this->hasMany(Evaluation::class);
    }
}


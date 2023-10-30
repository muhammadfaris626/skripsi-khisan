<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryAchievement extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quality', 'desc'];

    public function evaluationLists(): HasMany {
        return $this->hasMany(EvaluationList::class);
    }

    public function columnList(): HasMany {
        return $this->hasMany(ColumnList::class);
    }
}

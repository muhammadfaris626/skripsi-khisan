<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ColumnList extends Model
{
    use HasFactory;

    protected $fillable = ['category_achievement_id', 'order', 'column_a', 'column_b', 'column_c', 'column_d', 'column_e'];

    public function categoryAchievement(): BelongsTo {
        return $this->belongsTo(CategoryAchievement::class, 'category_achievement_id');
    }
}

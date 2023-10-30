<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EvaluationList extends Model
{
    use HasFactory;

    protected $fillable = ['evaluation_id', 'category_achievement_id', 'score', 'final_score', 'description'];

    public function evaluation(): BelongsTo {
        return $this->belongsTo(Evaluation::class, 'evaluation_id');
    }

    public function categoryAchievement(): BelongsTo {
        return $this->belongsTo(CategoryAchievement::class, 'category_achievement_id');
    }
}

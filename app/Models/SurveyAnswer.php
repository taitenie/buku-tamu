<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_id',
        'question_number',
        'answer',
    ];

    // Relasi SurveyAnswer belongs to Survey
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}

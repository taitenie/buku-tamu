<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'nama',
        'umur',
        'no_hp',
        'jenis_kelamin',
    ];

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class);
    }
}

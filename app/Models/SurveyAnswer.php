<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    protected $fillable = [
        'session_id',
        'nama',
        'umur',
        'no_hp',
        'jenis_kelamin',
        'jawaban_1',
        'jawaban_2',
        'jawaban_3',
        'jawaban_4',
        'jawaban_5',
        'jawaban_6',
        'jawaban_7',
        'jawaban_8',
        'jawaban_9',
        'jawaban_10',
        'jawaban_11',
    ];
}

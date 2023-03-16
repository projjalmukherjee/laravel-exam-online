<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_session_id',
        'student_correct_ans',
        'student_wrong_ans',
        'student_skip_ans'
        
    ];
}

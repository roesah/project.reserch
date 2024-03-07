<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExercise extends Model
{
    use HasFactory;

    protected $table = 'user_exercise'; // กำหนดชื่อตารางให้เป็น 'user_exercise'

    protected $fillable = [
        'user_id', // กำหนดให้ user_id เป็น fillable field
        'exercise_set_id', // กำหนดให้ exercise_set_id เป็น fillable field
        'user_answer' // กำหนดให้ user_answer เป็น fillable field
    ];

    // สร้างความสัมพันธ์กับโมเดล ExerciseSet
    public function exerciseSet()
    {
        return $this->belongsTo(ExerciseSet::class);
    }

    // สร้างความสัมพันธ์กับโมเดล User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

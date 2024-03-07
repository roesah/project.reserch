<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseSet extends Model
{
    use HasFactory;

    protected $fillable = ['exerciseSetName', 'lesson_id', 'exerciseQuestion', 'exerciseScore'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}

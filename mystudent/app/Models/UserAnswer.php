<?php
// app/Models/UserAnswer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'test_id',
        'selected_answer',
    ];

    // ความสัมพันธ์กับคลาส User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ความสัมพันธ์กับคลาส Test
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}

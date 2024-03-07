<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function level1()
    {
        // Retrieve lessons with chapters as 1
        $lessons = Lesson::where('chapters', 1)->get();
        return view('lessons.level1', compact('lessons'));
    }

    public function level2()
    {
        $lessons = Lesson::where('chapters', 2)->get();
        return view('lessons.level2', compact('lessons')); // Adjust view name based on your file structure
    }

    public function level3()
    {
        $lessons = Lesson::where('chapters', 3)->get();
        return view('lessons.level3', compact('lessons')); // Adjust view name based on your file structure
    }
}


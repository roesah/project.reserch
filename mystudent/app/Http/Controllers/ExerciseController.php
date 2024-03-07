<?php

namespace App\Http\Controllers;

use App\Models\ExerciseSet;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\UserExercise;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function level1()
    {
        $ExerciseSets = ExerciseSet::where('lesson_id', 26)->get();
        $lessons = Lesson::all();
        return view('exercise.level1', compact('ExerciseSets', 'lessons'));
    }
    public function saveAnswer(Request $request)
    {
        $user = Auth::user(); // รับข้อมูลผู้ใช้ที่ลงชื่อเข้าใช้

        // รับค่า exerciseSetId และ userAnswer จากข้อมูลที่ส่งมาผ่าน request
        $exerciseSetId = $request->input('exercise_set_id');
        $userAnswer = $request->input('user_answer');

        $userExercise = new UserExercise();
        $userExercise->user_id = $user->id; // กำหนด user_id เป็น ID ของผู้ใช้
        $userExercise->exercise_set_id = $exerciseSetId; // กำหนด exercise_set_id
        $userExercise->user_answer = $userAnswer; // กำหนด user_answer
        $userExercise->save(); // บันทึกข้อมูลลงในฐานข้อมูล

        // ให้โยนกลับไปยังหน้าที่ต้องการหลังจากบันทึกข้อมูลเสร็จสิ้น
        return redirect()->back()->with('success', 'บันทึกคำตอบสำเร็จ');
    }
    public function showExerciseForm()
    {
        // ดึงข้อมูล ExerciseSets จากฐานข้อมูล
        $ExerciseSets = ExerciseSet::all();

        // ตรวจสอบว่าผู้ใช้เคยตอบคำถามไว้หรือไม่
        $user = Auth::user();
        $userExercise = UserExercise::where('user_id', $user->id)->first();

        // หากมีการตอบคำถามแล้ว ให้นำคำตอบมาแสดงในฟอร์ม
        if ($userExercise) {
            $userAnswer = $userExercise->user_answer;
            $exerciseSetId = $userExercise->exercise_set_id;
        } else {
            $userAnswer = '';
            $exerciseSetId = null;
        }

        // ส่งข้อมูลไปยัง view เพื่อแสดงในฟอร์ม
        return view('exercise_form', compact('ExerciseSets', 'userAnswer', 'exerciseSetId'));
    }
    public function level2()
{
    $ExerciseSets = ExerciseSet::where('lesson_id', 28)->get();
    $lessons = Lesson::all();
    return view('exercise.level2', compact('ExerciseSets', 'lessons'));
}


    public function level3()
    {
        $lessons = Lesson::all();
        $ExerciseSets = ExerciseSet::where('lesson_id', 30)->get();
        return view('exercise.level3', compact('ExerciseSets', 'lessons'));
    }
}

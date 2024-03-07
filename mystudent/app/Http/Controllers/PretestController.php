<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\UserAnswer;
use App\Http\Controllers\Controller; 
class PretestController extends Controller
{
    public function index()
    {
        $questions = Test::all();
        return view('pretest.index', compact('questions'));
    }
    public function showTest()
    {
        $questions = Test::all();
        return view('pretest', compact('questions'));
    }

    public function submit(Request $request)
    {
        // บันทึกคำตอบของผู้ใช้
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'question_') !== false) {
                $testId = str_replace('question_', '', $key);
                UserAnswer::create([
                    'user_id' => auth()->user()->id, // หรือใช้วิธีอื่นในการระบุ user_id ของผู้ใช้
                    'test_id' => $testId,
                    'selected_answer' => $value
                ]);
            }
        }
    
        return redirect()->route('dashboard');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard')->with('warning', session('warning'));
    }
    public function level1()
    {
        return view('lesson.level1');
    }
    public function level2()
    {
        return view('lesson.level2');
    }
    public function level3()
    {
        return view('lesson.level3');
    }

    public function profile()
    {
        // โค้ดเพื่อแสดงโปรไฟล์ผู้ใช้
    }

    // เพิ่มเมทอดอื่น ๆ ตามความต้องการ
}


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckPretestAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // ตรวจสอบว่าผู้ใช้เคยเข้าสู่หน้า "pretest" หรือไม่
        if (!Auth::user()->hasVisitedPretest()) {
            // ถ้ายังไม่ได้เข้าสู่หน้า "pretest" ให้กลับไปยังหน้า "dashboard" และแสดงข้อความแจ้งเตือน
            return redirect('/dashboard')->with('warning', 'กรุณาทำ Pretest ก่อนเข้าสู่ระบบ');
        }

        return $next($request);
    }
}

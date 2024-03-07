<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pretest', [PretestController::class, 'index'])->name('pretest.index');

Route::middleware(['check.pretest.access'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/pretest/submit', [PretestController::class, 'submit'])->name('pretest.submit');
    Route::get('/lesson.level1', [LessonController::class, 'level1'])->name('lesson.level1');
    Route::get('/lesson.level2', [LessonController::class, 'level2'])->name('lesson.level2');
    Route::get('/lesson.level3', [LessonController::class, 'level3'])->name('lesson.level3');
    Route::get('/exercise.level1', [ExerciseController::class, 'level1'])->name('exercise.level1');
    Route::get('/exercise.level2', [ExerciseController::class, 'level2'])->name('exercise.level2');
    Route::get('/exercise.level3', [ExerciseController::class, 'level3'])->name('exercise.level3');
    Route::post('/exercise.level1', [ExerciseController::class, 'saveAnswer'])->name('exercise.saveAnswer');


});

require __DIR__.'/auth.php';

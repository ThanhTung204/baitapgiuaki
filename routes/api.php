<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}/subjects', [StudentController::class, 'subjects']);
Route::post('/students/{id}/register-subject/{subjectId}', [StudentController::class, 'register']);

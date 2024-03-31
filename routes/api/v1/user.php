<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\user\CourseController;
use App\Http\Controllers\API\user\FeedbackController;
use App\Http\Controllers\API\user\QuizController;

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

// Register
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::post('/login', [AuthController::class, 'login']);

// Feedback
Route::get('/feedback', [FeedbackController::class, 'index']);

// Quiz
Route::get('/quiz', [QuizController::class, 'index']);

// Get Course
Route::get('/course', [CourseController::class, 'getCourse']);

// Get Video Course
Route::get('/video-course', [CourseController::class, 'getVideoCourse']);

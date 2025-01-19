<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FeedbackController;

// Home Page
Route::get('/', function () {
    return view('home');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

Route::controller(FeedbackController::class)->group(function () {
    Route::get('/feedback', 'showFeedback');
    Route::get('/feedback/{feedback}', 'handleFeedback')->where('feedback', '[a-zA-Z]+');
});

// Hiển thị form
Route::get('/user', [FormController::class, 'showForm']);

// Xử lý dữ liệu từ form
Route::post('/submit-form', [FormController::class, 'handleForm'])->name('submit.form');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// Hiển thị form
Route::get('/user', [FormController::class, 'showForm']);

// Xử lý dữ liệu từ form
Route::post('/submit-form', [FormController::class, 'handleForm'])->name('submit.form');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/course', [PortfolioController::class, 'course'])->name('course');
Route::get('/course/{slug}', [PortfolioController::class, 'courseDetail'])->name('course.detail');



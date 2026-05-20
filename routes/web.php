<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/achievements', [PortfolioController::class, 'achievements'])->name('achievements');
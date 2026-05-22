<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Portfolio home
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Project detail
Route::get('/project/{slug}', [PortfolioController::class, 'show'])->name('project.show');

// Contact form submit
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

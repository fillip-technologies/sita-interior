<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('services', [HomeController::class, 'services'])->name('services');

// projects
Route::get('projects', [HomeController::class, 'projects'])->name('projects');

//  about
Route::get('about', [HomeController::class, 'about'])->name('about');

// contact
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

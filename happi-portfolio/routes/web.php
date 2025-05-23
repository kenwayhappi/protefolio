<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/parcours', [PageController::class, 'resume'])->name('resume');
Route::get('/projets', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendMessage'])->name('send.message');
Route::get('/download-cv', [PageController::class, 'downloadCv'])->name('download.cv');

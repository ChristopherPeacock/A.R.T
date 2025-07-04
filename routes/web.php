<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditPageController;
use App\Http\Controllers\pageController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Team;

//Unauthorised
Route::get('/', [pageController::class,'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'] )->name('contact');

//Authorised

Route::post('/inbox', [ContactController::class,'store'])->middleware(['auth', 'verified'])->name('inbox');

Route::get('/blogs', function () {
    return Inertia::render('Blogs');
})->middleware(['auth', 'verified'])->name('blogs');

Route::get('/crm', function () {
    return Inertia::render('Crm');
})->middleware(['auth', 'verified'])->name('crm');

Route::get('/editpages', [EditPageController::class, 'index'])->middleware(['auth', 'verified'])->name('editpages');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

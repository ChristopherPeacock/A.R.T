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
Route::post('/contact', [ContactController::class,'store'])->name('inboxContact');

Route::get('/industries/cybersecurity', function () {

    $team = Team::where('id', 1)->first();
    $teamName = $team ? $team->name : 'Default Team';

    return Inertia::render('Industries', [
        'teamName'=> $teamName,
    ]);

})->name('industries');

//Authorised
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

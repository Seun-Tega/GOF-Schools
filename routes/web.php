<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/about', function () {
    return view('pages.who-we-are');
})->name('about');

Route::get('/proprietor-message', function () {
    return view('pages.proprietor-and-proprietress');
})->name('message');

Route::get('/team', function(){
    return view('pages.team');
})->name('team');

Route::get('/curriculum', function(){
    return view('pages.curriculum');
})->name('curriculum');

Route::get('/extra-curriculum', function(){
    return view('pages.extra-curriculum');
})->name('extra.curriculum');

Route::get('/news-and-events', function(){
    return view('pages.news-and-events');
})->name('news.events');


Route::get('/gallery', function(){
    return view('pages.gallery');
})->name('gallery');


Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact');


Route::get('/application', function(){
    return view('pages.application');
})->name('application');


Route::get('/application/success', function(){
    return view('pages.success');
})->name('success');

Route::get('/facilities', function(){
    return view('pages.facilities');
})->name('facilities');












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

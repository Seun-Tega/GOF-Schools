<?php

use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('pages.who-we-are');
})->name('about');

Route::get('/proprietor-message', function () {
    return view('pages.proprietor-and-proprietress');
})->name('message');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/curriculum', function () {
    return view('pages.curriculum');
})->name('curriculum');

Route::get('/extra-curriculum', function () {
    return view('pages.extra-curriculum');
})->name('extra.curriculum');



Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/application', function () {
    return view('pages.application');
})->name('application');


Route::get('/application/success', [StudentController::class, 'loadSuccessPage'])->name('success');

Route::get('/facilities', function () {
    return view('pages.facilities');
})->name('facilities');

Route::get('/newsEvents', function () {
    return view('pages.news-and-events');
})->name('news.events');

Route::get('/news/all', [NewsEventController::class, 'getAllNews']);
Route::get('/news/{newsEvent:slug}',[NewsEventController::class, 'getFullNews'])->name('news');
Route::get('/news/filter/{currentType}', [NewsEventController::class, 'filter']);


Route::prefix('/admin')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::get('/students', [StudentController::class, 'getStudents'])->name('admin.students');
    Route::get('/{student}/student/', [StudentController::class, 'getStudentDetails'])->name('student.details');
    Route::get('/news', [NewsEventController::class, 'index'])->name('admin.news');
    Route::post('/news/store', [NewsEventController::class, 'store'])->name('news.store');
    Route::get('/news/{newsEvent}/edit', [NewsEventController::class, 'edit'])->name('news.edit');
    Route::put('/news/{newsEvent}', [NewsEventController::class, 'update'])->name('news.update');
    Route::delete('/news/{newsEvent}', [NewsEventController::class, 'destroy'])->name('news.destroy');

});



Route::post('/student/application', [StudentController::class, 'store'])->name('application.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

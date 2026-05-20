<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('student', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    route::get('student/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');
    route::post('student/store', [\App\Http\Controllers\studentmngtController::class, 'store'])->name('student.store');

    route::get('student/edit/{id}', [\App\Http\Controllers\studentmngtController::class, 'edit'])->name('student.edit');
    route::put('student/update/{id}', [\App\Http\Controllers\studentmngtController::class, 'update'])->name('student.update');
    route::delete('student/delete/{id}', [\App\Http\Controllers\studentmngtController::class, 'destroy'])->name('student.destroy');
    

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

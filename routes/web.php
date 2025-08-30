<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\CounterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SkillController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // aur bhi admin-only routes yahan add karo

Route::get('/add-details', function () {
        return view('admin.product.add-product');
    })->name('admin.product.add-product');

Route::post('/add-detail', [PersonalController::class, 'store'])
    ->name('admin.product.add-product');


Route::get('/add-counter', function () {
        return view('admin.counter.add-counter');
    })->name('admin.counter.add-counter');

    Route::post('/add-counter', [CounterController::class, 'store'])
    ->name('admin.counter.add-counter');


    Route::get('/add-skills', function () {
        return view('admin.skills.add-skills');
    })->name('admin.skills.add-skills');

     Route::post('/add-skills', [SkillController::class, 'store'])
    ->name('admin.skills.add-skills');

});

// ✅ Normal authenticated user ke liye (profile waghera)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

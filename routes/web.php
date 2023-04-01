<?php

use App\Http\Controllers\OwnersController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('owners', OwnersController::class)
    ->only(['index', 'store', 'create', 'edit', 'update', 'show', 'destroy'])
    ->middleware(['auth']);

Route::resource('pets', PetsController::class)
    ->only(['index', 'store', 'create', 'update', 'show', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

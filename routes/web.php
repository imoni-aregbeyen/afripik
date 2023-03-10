<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('premium', function () {
    return view('premium');
})->name('premium');

Route::get('admin', function () {
    return view('admin.dashboard');
})->name('admin');

require __DIR__.'/auth.php';

Route::resource('photos', PhotoController::class);
    // ->only(['index', 'store', 'create']);
    // ->middleware(['auth', 'verified']);

Route::resource('audios', AudioController::class);
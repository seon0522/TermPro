<?php

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
});

Route::resource('/book', \App\Http\Controllers\BookController::class)
->middleware(['auth']);

Route::get('search/{search?}', [\App\Http\Controllers\BookController::class, 'booksearch'])
    ->name('book.search');

Route::get('bookMonth', [\App\Http\Controllers\BookController::class, 'bookMonth'])
    ->name('book.bookMonth');

Route::get('bookYear/{year}', [\App\Http\Controllers\BookController::class, 'bookYear']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

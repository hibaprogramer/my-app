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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
<<<<<<< HEAD

=======

Route::get('/finances', function () {
    return view('finances');
})->middleware(['auth'])->name('finances');

Route::get('/contracts', function () {
    return view('contracts');
})->middleware(['auth'])->name('contracts');
>>>>>>> 4b20648d32e75bf047823305a251aee6243fd198
require __DIR__.'/auth.php';

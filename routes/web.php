<?php

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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/item', function () {
    return view('item');
})->name('item');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/customers', function () {
    return view('customers');
})->name('customers');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
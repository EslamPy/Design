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
})->name('index');

Route::get('/about', function () {
    return view('about'); // About page
})->name('about');

Route::get('/services', function () {
    return view('services'); // Services page
})->name('services');

Route::get('/contact', function () {
    return view('contact'); // Contact page
})->name('contact');

Route::get('/development', function () {
    return view('Development'); // Development page
})->name('Development');

Route::get('/gallery', function () {
    return view('gallery'); // gallery page
})->name('gallery');

Route::get('/rumouz', function () {
    return view('rumouz'); // Rumouz page
})->name('rumouz');

Route::get('/cali', function () {
    return view('cali'); // cali page
})->name('cali');

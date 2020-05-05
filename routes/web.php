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
    return view('pages.home.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about.index');
})->name('about');

Route::get('/process', function () {
    return view('pages.process.index');
})->name('process');

Route::get('/our-stack', function () {
    return view('pages.stack.index');
})->name('stack');


Route::get('/legal', function () {
    return view('pages.legal.index');
})->name('legal');

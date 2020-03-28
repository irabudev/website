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

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/process', function () {
    return view('pages.process');
})->name('process');

Route::get('/stack', function () {
    return view('pages.home');
})->name('stack');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

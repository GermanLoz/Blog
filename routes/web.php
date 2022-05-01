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
    return view('pages/inicio');
})->name('home');

Route::get('/programing', function () {
    return view('pages/programing');
})->name('programing');

Route::get('/physics', function () {
    return view('pages/physics');
})->name('physics');

Route::get('/summaries', function () {
    return view('pages/summaries');
})->name('summaries');
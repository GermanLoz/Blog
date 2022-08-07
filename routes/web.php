<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('pages/inicio');})->name('home');
Route::get('/programing', [PostController::class, 'programming'])->name('programing');
Route::get('/physics', [PostController::class, 'physics'])->name('physics');
Route::get('/summaries', [PostController::class, 'summaries_books'])->name('summaries');


Route::get('/admin/login', [UserController::class, 'login'])->name('login-admin');

Route::get('/admin', [BackendController::class, 'admin'])->name('admin');
Route::get('/admin/create', [BackendController::class, 'create'])->name('create-post');
Route::get('/admin/landing', [BackendController::class, 'landing'])->name('landing');
Route::get('/admin/users', [UserController::class, 'create'])->name('admin-users');
//Logic posts
Route::post('/admin/create-post', [PostController::class, 'create'])->name('post-create');
Route::get('/home', function () {return view('home');});

Auth::routes();

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('homepage');


Route::resource('/project', App\Http\Controllers\ProjectController::class);


Route::resource('/contact', App\Http\Controllers\ContactController::class);

Route::resource('/about', App\Http\Controllers\AboutController::class);

Route::resource('/resume', App\Http\Controllers\ResumeController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

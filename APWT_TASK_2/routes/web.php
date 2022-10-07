<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PagesController;
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
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/dashboard', [LoginController::class, 'dashboard']); 

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'logincheck'])->name('login.custom');

Route::get('/registration', [RegisterController::class, 'register'])->name('register');
Route::post('/registration', [RegisterController::class, 'newRegister'])->name('register');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [LoginController::class, 'sendContact'])->name('contact');
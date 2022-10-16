<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OrderController;


Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'logincheck'])->name('logincheck');

Route::get('/registration', [AuthController::class, 'register'])->name('register');
Route::post('/registration', [AuthController::class, 'newRegister'])->name('newRegister');

//Route::get('/manager',[AuthController::class, 'manager'])->name('manager')->middleware('ValidateManager');
Route::get('/orderlist',[CustomerController::class, 'customer'])->name('orderlist')->middleware('ValidateManager');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/customer',[CustomerController::class, 'menu'])->name('menu')->middleware('ValidateManager');
Route::post('/customer',[CustomerController::class, 'order'])->name('ordermenu')->middleware('ValidateManager');
Route::post('/customer',[CustomerController::class, 'passupdate'])->name('passupdate')->middleware('ValidateManager');

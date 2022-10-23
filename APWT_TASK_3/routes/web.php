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
Route::get('/orderlist', [CustomerController::class, 'customer'])->name('orderlist')->middleware('ValidateManager');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/customer', [CustomerController::class, 'menu'])->name('menu')->middleware('ValidateManager');
Route::post('/customer', [CustomerController::class, 'order'])->name('ordermenu')->middleware('ValidateManager');
Route::get('/customerpass', [CustomerController::class, 'passreset'])->name('passreset')->middleware('ValidateManager');
Route::post('/customerpass', [CustomerController::class, 'passupdate'])->name('passupdate')->middleware('ValidateManager');

Route::get('/customerlist', [ManagerController::class, 'loadlist'])->name('customerlist')->middleware('ValidateManager');
Route::get('/customerdelete/{name}', [ManagerController::class, 'delete'])->name('delete')->middleware('ValidateManager');

Route::get('/customerdetails/{name}', [ManagerController::class, 'show'])->name('show')->middleware('ValidateManager');
Route::post('/customer/edit/{name}', [ManagerController::class, 'edit'])->name('edit')->middleware('ValidateManager');

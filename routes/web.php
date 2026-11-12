<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/userCreate', [UserController::class,'create'])->name('createUser');
Route::post('/userStore', [UserController::class,'store'])->name('userStore');
Route::delete('/deleteUser/{id}', [UserController::class,'destroy'])->name('deleteUser');
Route::get('/update/{id}', [UserController::class,'edit'])->name('update');
Route::put('/updateStore/{id}', [UserController::class,'update'])->name('updateStore');

// how to used resource route

Route::resource('order_route', OrderController::class);
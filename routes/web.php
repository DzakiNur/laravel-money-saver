<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', [MoneyController::class, 'index'])->name('index')->middleware('auth');
Route::get('/add', [MoneyController::class, 'indexMoney'])->name('indexMoney')->middleware('auth');
Route::post('/storeMoney', [MoneyController::class, 'store'])->name('storeMoney');
//Route edit
Route::get('/edit/{id}', [MoneyController::class, 'edit'])->name('editMoney');
//Route update
Route::post('/update/{id}', [MoneyController::class, 'update'])->name('updateMoney');
//Route delete
Route::post('/delete/{id}', [MoneyController::class, 'delete'])->name('deleteMoney');
//Route login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/loginAuth', [LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//Route register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'store'])->name('storeRegister');

<?php

use Illuminate\Support\Facades\Auth;
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
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/decorations', [App\Http\Controllers\DecorationsController::class, 'index'])->name('decorations')->middleware('auth');
Route::get('/decorations/create', [App\Http\Controllers\DecorationsController::class, 'create'])->name('decorations')->middleware('auth');
Route::post('/decorations/store', [App\Http\Controllers\DecorationsController::class, 'store'])->name('decorations')->middleware('auth');
Route::get('/decorations/edit/{id}', [App\Http\Controllers\DecorationsController::class, 'edit'])->name('decorations')->middleware('auth');
Route::post('/decorations/update/{id}', [App\Http\Controllers\DecorationsController::class, 'update'])->name('decorations')->middleware('auth');
Route::get('/decorations/destroy/{id}', [App\Http\Controllers\DecorationsController::class, 'destroy'])->name('decorations')->middleware('auth');

Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/customers/create', [App\Http\Controllers\CustomersController::class, 'create'])->name('customers')->middleware('auth');
Route::post('/customers/store', [App\Http\Controllers\CustomersController::class, 'store'])->name('customers')->middleware('auth');
Route::get('/customers/edit/{id}', [App\Http\Controllers\CustomersController::class, 'edit'])->name('customers')->middleware('auth');
Route::post('/customers/update/{id}', [App\Http\Controllers\CustomersController::class, 'update'])->name('customers')->middleware('auth');
Route::get('/customers/destroy/{id}', [App\Http\Controllers\CustomersController::class, 'destroy'])->name('customers')->middleware('auth');

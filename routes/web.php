<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ClassController;
use App\Http\Controllers\Frontend\HomeControlller;
use App\Http\Controllers\Frontend\AboutControlller;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\ContactControlller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/admin', [DashboardController::class, 'index']);


Route::get('/', [HomeControlller::class, 'index']);
Route::get('/about', [AboutControlller::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
Route::get('/contact', [ContactControlller::class, 'index']);



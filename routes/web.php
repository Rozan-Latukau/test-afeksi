<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


// Login dan SignUp Routes
Route::get('/', [LoginController::class, 'index']) -> name('login');
Route::get('/daftar', [LoginController::class, 'daftar']) -> name('daftar');


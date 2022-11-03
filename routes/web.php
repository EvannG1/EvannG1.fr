<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'about'])->name('about');
Route::get('/degrees', [MainController::class, 'degrees'])->name('degrees');
Route::get('/experiences', [MainController::class, 'experiences'])->name('experiences');
Route::get('/skills', [MainController::class, 'skills'])->name('skills');

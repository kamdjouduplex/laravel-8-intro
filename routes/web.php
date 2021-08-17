<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('/show', [HomeController::class, 'show'])->name('show');

Route::get('/a-propos', [AboutController::class, 'apropos'])->name('about');

Route::get('/contact/{numero}/me/{text}', [ContactController::class, 'contact'])->name('contact');

Route::get('/users', [UserController::class, 'index'])->name('list-users');

Route::resource('articles', ArticleController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;

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
});

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::resource('stores', StoreController::class)->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'showw'])->name('service');
Route::get('/company', [App\Http\Controllers\HomeController::class, 'show'])->name('company');

Route::get('/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::get('/credit', [UsersController::class, 'credit'])->name('users.credit');
Route::get('/paid', [UsersController::class, 'paid'])->name('users.paid');
Route::get('/reservation', [UsersController::class, 'reservation'])->name('users.reservation');
Route::get('/logout', [UsersController::class, 'logout'])->name('users.logout');

Route::get('/category/{id}',[CategoryController::class, 'show']);
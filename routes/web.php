<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'auth_home'])->name('auth-home');

Route::get('/features', [App\Http\Controllers\PagesController::class, 'features'])->name('features');

Route::post('/', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('home-register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biz-setup', [App\Http\Controllers\BusinessController::class, 'setup'])->name('biz-setup');
Route::post('/biz-setup', [App\Http\Controllers\BusinessController::class, 'store'])->name('store-biz');
Route::post('/delete-biz', [App\Http\Controllers\BusinessController::class, 'delete_all'])->name('delete-all-biz');
Route::get('/biz/{id}', [App\Http\Controllers\BusinessController::class, 'biz'])->name('biz');
Route::get('/biz/edit/{id}', [App\Http\Controllers\BusinessController::class, 'edit'])->name('edit-biz');
Route::get('/biz/contact/edit/{id}', [App\Http\Controllers\BusinessController::class, 'edit_contact'])->name('edit-biz-contact');

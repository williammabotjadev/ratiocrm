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

// Section Home

Route::get('/customers/{id}', [App\Http\Controllers\BusinessController::class, 'biz_customers'])->name('biz-customers');
Route::get('/suppliers/{id}', [App\Http\Controllers\BusinessController::class, 'biz_suppliers'])->name('biz-suppliers');
Route::get('/employees/{id}', [App\Http\Controllers\BusinessController::class, 'biz_employees'])->name('biz-employees');
Route::get('/products/{id}', [App\Http\Controllers\BusinessController::class, 'biz_products'])->name('biz-products');
Route::get('/services/{id}', [App\Http\Controllers\BusinessController::class, 'biz_services'])->name('biz-services');
Route::get('/transactions/{id}', [App\Http\Controllers\BusinessController::class, 'biz_transactions'])->name('biz-transactions');
Route::get('/reporting/{id}', [App\Http\Controllers\BusinessController::class, 'biz_reporting'])->name('biz-reporting');

// Component Creation Routes : GET

Route::get('/customers/new', [App\Http\Controllers\BusinessController::class, 'new_customer'])->name('new-customer');
Route::get('/suppliers/new', [App\Http\Controllers\BusinessController::class, 'new_supplier'])->name('new-supplier');
Route::get('/employees/new', [App\Http\Controllers\BusinessController::class, 'new_employee'])->name('new-employee');
Route::get('/products/new', [App\Http\Controllers\BusinessController::class, 'new_product'])->name('new-product');
Route::get('/services/new', [App\Http\Controllers\BusinessController::class, 'new_service'])->name('new-service');
Route::get('/transactions/new', [App\Http\Controllers\BusinessController::class, 'new_transaction'])->name('new-transaction');
Route::get('/reporting/new', [App\Http\Controllers\BusinessController::class, 'new_report'])->name('new-report');


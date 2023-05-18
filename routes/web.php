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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminProfileController::class, 'AdminProfile'])->name('AdminProfile')->middleware('admin');

Route::get('delete/{id}', [App\Http\Controllers\AdminProfileController::class, 'destroy'])->name('destroy');

Route::get('edit/{id}', [App\Http\Controllers\AdminProfileController::class, 'show'])->name('show');

Route::post('edit/{id}', [App\Http\Controllers\AdminProfileController::class, 'edit'])->name('edit');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('/header', [App\Http\Controllers\HeaderController::class, 'Header'])->name('Header');

Route::get('/filials', [App\Http\Controllers\FilialsController::class, 'filials'])->name('filials');

Route::get('/search', [App\Http\Controllers\CatalogController::class, 'search'])->name('search');


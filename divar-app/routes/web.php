<?php

use App\Http\Controllers\categoryController;
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
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/category'], function () {
    Route::get('/index', [categoryController::class, 'index'])->name('category.index')->middleware('auth');
    Route::get('/create', [categoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::get('/edit/{id}', [categoryController::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::post('/update/{id}', [categoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::post('/store', [categoryController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('/delete/{}', [categoryController::class, 'destroy'])->name('category.delete')->middleware('auth');

});
Auth::routes();

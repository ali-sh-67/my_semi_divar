<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/Ad/createAd', [AdsController::class, 'createAd'])->name('createAd');
Route::post('/Ad/storeAd', [AdsController::class, 'storeAd'])->name('storeAd');
Route::get('/Ad/index', [AdsController::class, 'indexAd'])->name('indexAd');
Route::get('/Ad/showAd/{id}', [AdsController::class, 'showAd'])->name('showAd');
Route::get('/Ad/deleteAd/{id}',[AdsController::class, 'deleteAd'])->name('deleteAd')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category', categoryController::class)->middleware('auth');
Auth::routes();

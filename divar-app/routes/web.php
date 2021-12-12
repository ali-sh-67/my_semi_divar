<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\commentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Ad/createAd', [AdsController::class, 'createAd'])->name('createAd')->middleware('auth');
Route::post('/Ad/storeAd', [AdsController::class, 'storeAd'])->name('storeAd')->middleware('auth');
Route::get('/Ad/pageAd', [AdsController::class, 'indexAd'])->name('indexAd')->middleware('auth');;
Route::get('/Ad/showAd/{id}', [AdsController::class, 'showAd'])->name('showAd')->middleware('auth');

Route::get('/Ad/deleteAd/{id}',[AdsController::class, 'deleteAd'])->name('deleteAd')->middleware('auth');
Route::get('/Ad/editAd/{id}',[AdsController::class, 'editAd'])->name('editAd')->middleware('auth');
Route::post('/Ad/updateAd/{id}',[AdsController::class, 'updateAd'])->name('updateAd')->middleware('auth');

Route::get('/Comment/create/{id}',[commentController::class, 'createComment'])->name('createComment');
Route::post('/Comment/store/{id}',[commentController::class, 'StoreComment'])->name('StoreComment');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/category'], function () {
    Route::get('/index', [categoryController::class, 'index'])->name('category.index')->middleware('auth');
    Route::get('/create', [categoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::get('/edit/{id}', [categoryController::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::post('/update/{id}', [categoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::post('/store', [categoryController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('/delete/{id}', [categoryController::class, 'destroy'])->name('category.delete')->middleware('auth');

});
Auth::routes();

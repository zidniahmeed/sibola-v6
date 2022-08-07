<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TypeController;

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
    return view('dashboard');
});

// tag
Route::get('/tag',[TagController::class, 'index'])->name('tag');
Route::get('/create-tag',[TagController::class, 'create'])->name('createt-ag');
Route::post('/store-tag',[TagController::class, 'store'])->name('storetag');
Route::get('/show-tag/{id}',[TagController::class, 'show'])->name('showtag');
Route::post('/update-tag/{id}',[TagController::class, 'update'])->name('updatetag');
Route::get('/destroy-tag{id}',[TagController::class, 'destroy'])->name('destroytag');

// type
Route::get('/type',[TypeController::class, 'index'])->name('type');
Route::get('/create-type',[TypeController::class, 'create'])->name('create-type');
Route::post('/store-type',[TypeController::class, 'store'])->name('storetype');
Route::get('/show-type/{id}',[TypeController::class, 'show'])->name('showtype');
Route::post('/update-type/{id}',[TypeController::class, 'update'])->name('updatetype');
Route::get('/destroy-type{id}',[TypeController::class, 'destroy'])->name('destroytype');
has


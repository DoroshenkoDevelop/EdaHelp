<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefPages;
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
/* ДОМАШНЯЯ СТРАНИЦА */
Route::view('/','home')->name('home');
/* ДОМАШНЯЯ СТРАНИЦА */

/* О НАС */
Route::view('o_nas','o_nas')->name('o_nas');
/* О НАС */

/* ГИД */
Route::view('map','map.map')->name('map');
/* ГИД */

/* ШЕФ СПИСОК */
Route::get('chef_list',[ChefPages::class,'index'])->name('chef_list');
/* ШЕФ СПИСОК */

/* ШЕФ */
/*Route::get('chef_list/chef',[ChefPages::class,'show'])->name('chef');*/
Route::view('chef','chef.gordon')->name('chef');
/* ШЕФ */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* ШЕФ РЕЦЕПТЫ */

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
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
Route::get('o_nas',[Pages::class,'index'])->name('o_nas');
/* О НАС */

/* ШЕФ РЕЦЕПТЫ */
/*Route::get('chef_list/',[ChefPages::class,'index'])->name('chef_list');*/
/* ШЕФ РЕЦЕПТЫ */


/* ШЕФ РЕЦЕПТЫ */
Route::get('chef_list',function (){
$lists = DB::table('list_chefs')->get();
return view('chef_list', compact('lists'));
})->name('list_chef');
/* ШЕФ РЕЦЕПТЫ */

/* ШЕФ РЕЦЕПТЫ */
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* ШЕФ РЕЦЕПТЫ */

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipesController;
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
Route::get('/',[HomeController::class,'home'])->name('home');
/* ДОМАШНЯЯ СТРАНИЦА */

/* О НАС */
Route::get('info',[HomeController::class,'info'])->name('info');
/* О НАС */

/* ГИД */
Route::get('map',[HomeController::class,'map'])->name('map');
/* ГИД */

/* ШЕФ СПИСОК */
Route::get('list_chef',[ListChefController::class,'index'])->name('list_chefs');
Route::get('list_chef{id}/chef',[ListChefController::class,'show'])->name('chef');
/* ШЕФ СПИСОК */

/* СПИСОК РЕЦЕПТОВ */
Route::get('list_recipes',[RecipesController::class,'index'])->name('list_recipes');
Route::get('list_recipes/recipes',[RecipesController::class,'show'])->name('recipes');
/* СПИСОК РЕЦЕПТОВ */


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* ШЕФ РЕЦЕПТЫ */

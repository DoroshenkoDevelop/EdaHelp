<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListSnacksController;
use App\Http\Controllers\ListSaladsController;
use App\Http\Controllers\MailController;
use App\Mail\Mail;

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

/* РЕСТО-ГИД*/
Route::get('map',[HomeController::class,'map'])->name('map');
/* РЕСТО-ГИД*/

/* ПОЛИТИКА КОНФЕДЕНЦИАЛЬНОСТИ */
Route::get('order',[HomeController::class,'order'])->name('order');
/* ПОЛИТИКА КОНФЕДЕНЦИАЛЬНОСТИ */

/* ЕМАЙЛ */
Route::get('my_recipe',[HomeController::class,'send'])->name('my_recipe');
/* ЕМАЙЛ */

/* ЕМАЙЛ ОТПРАВКА */

/* ЕМАЙЛ ОТПРАВКА */

/*Route::get('email',function (){
Mail::to('printcodestudio@gmail.com')->send(new Mail());
});*/

/* ШЕФ СПИСОК */
Route::get('list_chef',[ListChefController::class,'index'])->name('list_chefs');
Route::get('list_chef{id}/chef',[ListChefController::class,'show'])->name('chef');
/* ШЕФ СПИСОК */

/* СПИСОК РЕЦЕПТОВ ЗАКУСОК */
Route::get('recipe_snacks',[ListSnacksController::class,'index'])->name('snacks');
Route::get('recipe_snack{id}/recipe',[ListSnacksController::class,'show'])->name('snack');
/* СПИСОК РЕЦЕПТОВ ЗАКУСОК */

/* СПИСОК РЕЦЕПТОВ САЛАТОВ */
Route::get('recipe_salads',[ListSaladsController::class,'index'])->name('salads');
Route::get('recipe_salads{id}/recipe',[ListSaladsController::class,'show'])->name('salad');
/* СПИСОК РЕЦЕПТОВ САЛАТОВ */







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* ШЕФ РЕЦЕПТЫ */




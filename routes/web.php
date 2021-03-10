<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListSnacksController;
use App\Http\Controllers\SaladsListController;
use App\Http\Controllers\ListMeatController;
use App\Http\Controllers\ListFishesController;
use App\Http\Controllers\ListDessertsController;
use App\Http\Controllers\ListRisottoController;
use App\Http\Controllers\ListExquisiteController;
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

/* МОЙ РЕЦЕПТ */
Route::get('my_recipe',function ()
{
    return view('my_recipe.my_recipe');
});
/* МОЙ РЕЦЕПТ */

/* ОТПРАВКА МОЙ РЕЦЕПТ */
Route::post('send_recipe',[MailController::class,'send']);
/* ОТПРАВКА МОЙ РЕЦЕПТ */



/* ШЕФ СПИСОК */
Route::get('list_chef',[ListChefController::class,'index'])->name('list_chefs');
Route::get('list_chef{id}/chef',[ListChefController::class,'show'])->name('chef');
/* ШЕФ СПИСОК */

/* СПИСОК РЕЦЕПТОВ ЗАКУСОК */
Route::get('recipe_snacks',[ListSnacksController::class,'index'])->name('snacks');
Route::get('recipe_snack{id}/recipe',[ListSnacksController::class,'show'])->name('snack');
/* СПИСОК РЕЦЕПТОВ ЗАКУСОК */

/* СПИСОК РЕЦЕПТОВ САЛАТОВ */
Route::get('recipe_salads',[SaladsListController::class,'index'])->name('salads');
Route::get('recipe_salad{id}/recipe',[SaladsListController::class,'show'])->name('salad');
/* СПИСОК РЕЦЕПТОВ САЛАТОВ */

/* СПИСОК РЕЦЕПТОВ МЯСО */
Route::get('recipe_meats',[ListMeatController::class,'index'])->name('meats');
Route::get('recipe_meat{id}/recipe',[ListMeatController::class,'show'])->name('meat');
/* СПИСОК РЕЦЕПТОВ МЯСО*/

/* СПИСОК РЕЦЕПТОВ РЫБА */
Route::get('recipe_fishes',[ListFishesController::class,'index'])->name('fishes');
Route::get('recipe_fish{id}/recipe',[ListFishesController::class,'show'])->name('fish');
/* СПИСОК РЕЦЕПТОВ РЫБА*/

/* СПИСОК РЕЦЕПТОВ ДИССЕРТЫ */
Route::get('recipe_desserts',[ListDessertsController::class,'index'])->name('desserts');
Route::get('recipe_dessert{id}/recipe',[ListDessertsController::class,'show'])->name('dessert');
/* СПИСОК РЕЦЕПТОВ ДИССЕРТЫ */

/* СПИСОК РЕЦЕПТОВ РИЗОТТО */
Route::get('recipe_risottos',[ListRisottoController::class,'index'])->name('risottos');
Route::get('recipe_risotto{id}/recipe',[ListRisottoController::class,'show'])->name('risotto');
/* СПИСОК РЕЦЕПТОВ РИЗОТТО */

/* СПИСОК РЕЦЕПТОВ ИЗЫСКАНОЕ */
Route::get('recipe_exquisite',[ListExquisiteController::class,'index'])->name('exquisites');
Route::get('recipe_exquisite{id}/recipe',[ListExquisiteController::class,'show'])->name('exquisite');
/* СПИСОК РЕЦЕПТОВ ИЗЫСКАНОЕ */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





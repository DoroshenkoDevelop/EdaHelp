<?php

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

Route::view('/','home')->name('home');

Route::get('o_nas',[Pages::class,'index'])->name('o_nas');

Route::get('chef_list',[ChefPages::class,'index'])->name('chef_list');



Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

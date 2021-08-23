<?php

use App\Http\Controllers\Panel\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\BlogController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix"=>"dashboard","middleware"=>"auth"],function (){
    Route::resource("role", RoleController::class);
    Route::resource("food" , FoodController::class);
    Route::resource("blog" , BlogController::class);


});

Route::get("blog/{blog:title}",[BlogController::class,'showSinglePage'])->name('singlepage');
<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Panel\RoleController;
use App\Models\Blog;
use App\Models\Food;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

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
    $food= Food::with('category','likeable')->get();
    $blogs = Blog::with("user")->withCount('comments','likeable')->orderBy("id","DESC")->take(3)->get();
    return view('welcome',compact("food","blogs"));
});
Route::get("/aboutvenous",function (){
   return view("about");
});
Route::get("/chefs",function (){
   return view("chefs");
});
Route::get("/contactus",function (){
   return view("contact");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix"=>"dashboard","middleware"=>"auth"],function (){
    Route::resource("role", RoleController::class);
    Route::resource("food" , FoodController::class);
    Route::resource("blog" , BlogController::class);
    Route::resource("comment",CommentController::class);
    Route::resource("category", CategoryController::class);
    Route::resource("tag", TagController::class);
    Route::resource("booking", BookingController::class);
    Route::get("blogapi",[ApiController::class,"blogLike"])->name("like.api");
    Route::get("foodapi",[ApiController::class,"foodLike"])->name("food.api");
});

Route::get("blog/{blog:title}",[BlogController::class,'showSinglePage'])->name('singlepage');
Route::get("blogslist",[BlogController::class,'showblogs'])->name('blogs');
Route::get('food/menu',[FoodController::class,"ShowMenu"])->name('foodmenu');

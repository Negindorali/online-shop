<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function blogLike(Request $request)
    {
        $blog=Blog::find($request->input("post_id"));
        $blog->likeable()->create(['user_id'=>Auth::id()]);
        return count($blog->likeable);
    }


    public function foodLike(Request $request)
    {
      $food=Food::find($request->input("food_id"));
      $food->likeable()->create(['user_id'=>Auth::id()]);
      return count($food->likeable);
    }
}

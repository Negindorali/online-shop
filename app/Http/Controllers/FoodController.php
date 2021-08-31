<?php

namespace App\Http\Controllers;

use App\Http\Helper\UploadFile;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FoodController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        $foods= Food::with('category')->get();
        return view("foods.showfoods",compact("foods"));
    }

    public function ShowMenu(Food $food)
    {
//        $food = $food->load('category','category.food');
        $food= Food::with('category')->get();
        return view('foods.menu',compact('food'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $category = Category::all();
        return view("foods.create",compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
           Food::Name=>["required",'unique:foods'],
           Food::PRICE=>["required"],
            Food::TYPE=>["nullable"],
            Food::CATEGORY_ID=>['required'],
            Food::NUTRIENTS => ['required'],
            Food::IMAGE => ["nullable", "max:2024", "image"]
        ]);

        if ($request->has(Food::IMAGE))
            $valid =array_merge($valid,[
                Food::IMAGE=>(new UploadFile($request->file(Food::IMAGE)))->fileName,
            ]);


        Food::create($valid);
        return redirect(route("food.index"))->with("msg","saved!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        abort("404");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Food $food)
    {
        $category=Category::all();
        return view("foods.edit",compact("food","category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Food $food)
    {
        $valid = $request->validate([
           Food::TYPE =>["required"],
           Food::PRICE =>["required"],
           Food::Name =>["required",'unique:foods,id,'.$food->id],
            Food::NUTRIENTS => ["required"],
            Food::IMAGE => ["nullable"]
        ]);
        if ($request->hasFile(Food::IMAGE))
            @unlink("upload".$food->imageName);
        if ($request->has(Food::IMAGE))
            $valid =array_merge($valid,[
                Food::IMAGE=>(new UploadFile($request->file(Food::IMAGE)))->fileName,
            ]);

        $food->update($valid);
        return redirect(route("food.index"))->with("msg","updated !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Food $food)
    {
       $food->delete();
        return back()->with("msg", "deleted");
    }
}

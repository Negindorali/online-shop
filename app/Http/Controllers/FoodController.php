<?php

namespace App\Http\Controllers;

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
        $foods= Food::all();
        return view("foods.index",compact("foods"));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view("foods.create");
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
            Food::TYPE=>["required"],
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
        return view("foods.edit",compact("food"));
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
           Food::Name =>["required",'unique:foods,id,'.$food->id]
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

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::all();
        return view("category.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("category.create");
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
            Category::SLUG=>['required'],
            Category::TYPE=>['required'],
            Category::TITLE=>['required','unique:categories']
        ]);
        $category= Category::create($valid);
        return redirect(route("category.index"))->with("msg","successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        return view("category.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        $valid = $request->validate([
           Category::TYPE=>['required'],
           Category::TITLE=>["required",'unique:foods,id,'.$category->id],
           Category::SLUG=>['required'],
        ]);
        $category->update($valid);
        return redirect(route("category.index",))->with("msg","updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with("msg","deletd successfully!");
    }
}

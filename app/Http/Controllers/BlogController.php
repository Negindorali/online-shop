<?php

namespace App\Http\Controllers;

use App\Http\Helper\UploadFile;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::with("user")->withCount('comments')->get();
        return view("blogs.index",compact("blogs"));
    }

    public function showSinglePage (Blog $blog)
    {
        $blog= $blog->load('comments','comments.user');
        return view("blogs.singlepage",compact("blog"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("blogs.create");
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $valid = $request -> validate([
            Blog::TITLE => ["required"],
            Blog::SLUG => ["required",'unique:blogs'],
            Blog::CONTENT => ["required"],
            Blog::TYPE => ["required"],
            Blog::IMAGE => ["nullable", "max:2024", "image"]
        ]);

        if ($request->has(Blog::IMAGE))
            $valid =array_merge($valid,[
               Blog::IMAGE=>(new UploadFile($request->file(Blog::IMAGE)))->fileName,
            ]);

        $valid = array_merge($valid,[Blog::USER_ID => Auth::id()]);

        $blog = Blog::create($valid);
        return redirect(route("blog.index", $blog->id))->with("msg","saved!");
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function show(Blog $blog)
    {
        abort("404");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function edit(Blog $blog)
    {
        return view("blogs.edit",compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return Response
     */
    public function update(Request $request, Blog $blog)
    {
        $valid = $request ->validate([
            Blog::TITLE =>["required"],
            Blog::TYPE =>["required"],
            Blog::CONTENT =>["required"],
            Blog::IMAGE => ["required"],
            Blog::SLUG => ["required"]
        ]);

        $blog ->update($valid);

        return redirect(route("blog.index"))->with("msg", "updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route("blog.index"))->with("msg", "deleted successfully");

    }
}

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:role.index")->only("index");
        $this->middleware("role:role.create")->only(["create","store"]);
        $this->middleware("role:role.update")->only(["edit","show","update"]);
        $this->middleware("role:role.delete")->only("destroy");
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $roles=Role::all();
        return view("roles.index",compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        abort("404");
    }

    /**
     * @param Role $role
     */
    public function edit(Role $role)
    {
        return view("roles.edit",compact("role"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

@extends('layouts.dashboard.master')
@section('ex-title','add category')
@section('content')
    <form action="{{route("category.store")}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Category::TITLE}}">TITLE </label>
                <input type="text" name="{{\App\Models\Category::TITLE}}" id="{{\App\Models\category::TITLE}}" required class="form-control" placeholder="TITLE" >
            </div>
            <div class="col-md"></div>
        </div>

        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Category::SLUG}}">SLUG</label>
                <input type="text" name="{{\App\Models\Category::SLUG}}" id="{{\App\Models\Category::SLUG}}" required class="form-control" placeholder="SLUG">
            </div>
            <div class="col-md">
                <label for="{{\App\Models\Category::TYPE}}">TYPE</label>
                <input type="text" name="{{\App\Models\Category::TYPE}}" id="{{\App\Models\Category::TYPE}}" required class="form-control" placeholder="TYPE">
            </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            Save
        </button>
    </form>
@endsection
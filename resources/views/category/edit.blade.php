@extends('layouts.dashboard.master')
@section('ex-title','edit category')
@section('content')
    <form action="{{route("category.update",$category->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Category::TITLE}}">TITLE </label>
                <input type="text" name="{{\App\Models\Category::TITLE}}" id="{{\App\Models\category::TITLE}}" required class="form-control" value="{{old(\App\Models\Category::TITLE,$category->title)}}"
                       placeholder="TITLE">
            </div>
            <div class="col-md"></div>
        </div>
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Category::SLUG}}">SLUG</label>
                <input type="text" name="{{\App\Models\Category::SLUG}}" id="{{\App\Models\Category::SLUG}}" required class="form-control" value="{{old(\App\Models\Category::SLUG,$category->slug)}}"
                       placeholder="SLUG">
            </div>
            <div class="col-md">
                <label for="{{\App\Models\Category::TYPE}}">TYPE</label>
                <input type="text" name="{{\App\Models\Category::TYPE}}" id="{{\App\Models\Category::TYPE}}" required class="form-control" value="{{old(\App\Models\Category::TYPE,$category->type)}}"
                       placeholder="TYPE">
            </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-saveS mx-2"></i>
            UPDATE
        </button>
    </form>
@endsection

@extends('layouts.dashboard.master')
@section('ex-title','add foods')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('templateassets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <form enctype="multipart/form-data" action="{{route("food.store")}}" method="post">
        @if($errors->any())
            <div class="alert alert-info">
                <ol>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>
            </div>
        @endif


        @csrf
        <div class="form-group row p-5">
            <div class="col-md">
                <label for="{{\App\Models\Food::Name}}">FOOD NAME </label>
                <input type="text" name="{{\App\Models\Food::Name}}" id="{{\App\Models\Food::Name}}" required class="form-control" placeholder="FOOD NAME" value="{{old(\App\Models\Food::Name)}}">
            </div>
            <div class="col-md">
                    <div class="col-md">
                        <label for="{{\App\Models\Food::NUTRIENTS}}}">NUTRIENTS</label>
                        <input type="text" name="{{\App\Models\Food::NUTRIENTS}}" id="{{\App\Models\Food::NUTRIENTS}}" required class="form-control" placeholder="NUTRIENTS" />
                    </div>
            </div>
        </div>
        <div class="form-group row p-5">
            <div class="col-md">
                <label for="{{\App\Models\Food::PRICE}}">FOOD PRICE</label>
                <input type="number" name="{{\App\Models\Food::PRICE}}" id="{{\App\Models\Food::PRICE}}" required class="form-control" placeholder="FOOD PRICE">
            </div>
            <div class="form-group col-md">
                <label for="{{\App\Models\Food::CATEGORY_ID}}">FOOD CATEGORY</label>
                <select class="form-control" name="{{\App\Models\Food::CATEGORY_ID}}" id="{{\App\Models\Food::CATEGORY_ID}}"  placeholder="FOOD CATEGORY">
                    @foreach($category as $title)
                    <option value="{{$title->id}}">{{$title->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <input class="btn btn-default py-3 px-4" id="formFileLg" name="{{\App\Models\Food::IMAGE}}" type="file"/>
            </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            save
        </button>
    </form>
@endsection
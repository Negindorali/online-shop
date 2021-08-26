@extends('layouts.template.master')
@section('ex-title','Foods List')
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
  <section>
    <div class="col-md ">
        <a class="btn btn-success m-5 text-white" href="{{route("food.create")}}">Create New Food</a>
        <table class="table m-5">
            <caption>FOODS LIST</caption>
            <thead>
            <tr>
                <th scope="col">ROW</th>
                <th scope="col">FOOD NAME</th>
                <th scope="col">FOOD TYPE</th>
                <th scope="col">FOOD PRICE</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foods as $food)
                <tr>
                    <th scope="row">{{$food->id}}</th>
                    <td>{{$food->name}}</td>
                    <td>{{$food->category_id}}</td>
                    <td>{{$food->price}}</td>
{{--                    <td><a href="{{route("food.edit",$food->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>--}}
{{--                    <td>--}}
{{--                        <form action="{{route("category.destroy",$food->id)}}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('delete')--}}
{{--                            <button class="btn"><i class="fa fa-remove fa-2x"></i></button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </section>
@endsection


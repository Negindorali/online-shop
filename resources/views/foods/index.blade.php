@extends('layouts.dashboard.master')
@section('ex-title','Foods List')
@section('content')
  <section>
    <div class="">
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
                    <td>{{$food->type}}</td>
                    <td>{{$food->price}}</td>
                    <td><a href="{{route("food.edit",$food->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>
                    <td>
                        <form action="{{route("category.destroy",$food->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn"><i class="fa fa-remove fa-2x"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </section>




@endsection


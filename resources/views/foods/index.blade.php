@extends('layouts.dashboard.master')
@section('ex-title','foods')
@section('content')
    <a class="btn btn-success" href="{{route("food.create")}}">create</a>


    <table class="table">
        <caption>لیست غذاها</caption>
        <thead>
        <tr>
            <th scope="col">ردیف</th>
            <th scope="col">نام غذا</th>
            <th scope="col">نوع غذا</th>
            <th scope="col">قیمت غذا</th>
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
                  <form action="{{route("food.destroy",$food->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn"><i class="fa fa-remove fa-2x"></i></button>
                  </form>
              </td>
          </tr>
      @endforeach

        </tbody>
    </table>
@endsection


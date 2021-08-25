@extends('layouts.dashboard.master')
@section('ex-title','categories list')
@section('content')
    <section>
        <div class="">
            <a class="btn btn-success m-5 text-white" href="{{route("category.create")}}">Create New Category</a>
            <table class="table m-5">
                <caption>Categories List</caption>
                <thead>
                <tr>
                    <th scope="col">ROW</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">SLUG</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category )
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->title}}</td>
                        <td>{{$category->type}}</td>
                        <td>{{$category->slug}}</td>
                        <td><a href="{{route("category.edit",$category->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>
                        <td>
                            <form action="{{route("category.destroy",$category->id)}}" method="post">
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
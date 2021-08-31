@extends('layouts.dashboard.master')
@section('content')
    <section>
    <div class="col-md ">
        <a class="btn btn-success m-5 text-white" href="{{route("tag.create")}}">Create New TAG</a>
        <table class="table m-5">
            <caption>TAGS LIST</caption>
            <thead>
            <tr>
                <th scope="col">ROW</th>
                <th scope="col">TAG TITLE</th>
                <th scope="col">TAG SLUG</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                <th scope="row">{{$tag->id}}</th>
                <td>{{$tag->title}}</td>
                <td>{{$tag->slug}}</td>
                <td><a href="{{route("tag.edit",$tag->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>
                <td>
                    <form action="{{route("tag.destroy",$tag->id)}}" method="post">
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

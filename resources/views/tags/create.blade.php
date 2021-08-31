@extends('layouts.dashboard.master')
@section('content')
    <form enctype="multipart/form-data" action="{{route("tag.store")}}" method="post">
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
                <label for="{{\App\Models\Tag::TITLE}}">TAG TITLE </label>
                <input type="text" name="{{\App\Models\Tag::TITLE}}" id="{{\App\Models\Tag::TITLE}}" required class="form-control" placeholder="TAG TITLE" >
            </div>
            <div class="col-md">
                <div class="col-md">
                    <label for="{{\App\Models\Tag::SLUG}}}">TAG SLUG</label>
                    <input type="text" name="{{\App\Models\Tag::SLUG}}" id="{{\App\Models\Tag::SLUG}}" required class="form-control" placeholder="TAG SLUG" />
                </div>
            </div>
        </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            save
        </button>
    </form>

@endsection
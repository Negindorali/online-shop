@extends('layouts.dashboard.master')
@section('ex-title','Edit Food')
@section('content')
    <form action="{{route("tag.update",$tag->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Tag::TITLE}}">TAG TITLE </label>
                <input type="text" name="{{\App\Models\Tag::TITLE}}" id="{{\App\Models\Tag::TITLE}}" required class="form-control" placeholder="FOOD NAME" value="{{old(\App\Models\Tag::TITLE,$tag->title)}}">
            </div>
            <div class="col-md">
                <div class="col-md">
                    <label for="{{\App\Models\Tag::SLUG}}">NUTRIENTS</label>
                    <input type="text" name="{{\App\Models\Tag::SLUG}}" id="{{\App\Models\Tag::SLUG}}" required class="form-control" placeholder="NUTRIENTS" value="{{old(\App\Models\Tag::SLUG,$tag->slug)
                    }}" />
                </div>
            </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            UPDATE
        </button>
    </form>
@endsection
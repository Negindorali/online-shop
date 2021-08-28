@extends('layouts.template.master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('templateassets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div>
            <a href="{{route("blog.create")}}" class="float-left read btn btn-primary">create one</a>
        </div>
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('singlepage',$blog->title)}}" class="block-20" style="background-image: url('{{$blog->image}}');">
                            <img src="{{asset("upload/".$blog->image)}}" class="img img-fluid" alt="">
                        </a>
                        <div class="text px-4 pt-3 pb-4">
                            <div class="meta">
                                <div><a href="#">{{\Carbon\Carbon::make($blog->created_at)->toDateString()}}</a></div>
                                <div><a href=""></a>{{$blog->user->name}}</div>
                            </div>
                            <h3 class="heading"><a href="">{{$blog->title}}</a></h3>
                            <p class="clearfix">
                                <a href="#" class="float-left read btn btn-primary">Read more</a>
                                <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span>{{$blog->comments_count}}</a>
                                <a href="{{route("blog.edit",$blog->id)}}" class="float-right meta-chat" method=""><span class="fa fa-edit"></span></a>
                            <form action="{{route("blog.destroy",$blog->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="float-right meta-chat btn"><span class="fa fa-remove"></span></button>
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

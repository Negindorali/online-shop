@extends('layouts.dashboard.master')
@section('content')
    <section>
        <div class="col-md ">
            <a class="btn btn-success m-5 text-white" href="{{route("blog.create")}}">Create New BLOG</a>
            <table class="table m-5">
                <caption>BLOGS LIST</caption>
                <thead>
                <tr>
                    <th scope="col">ROW</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">SLUG</th>
                    <th scope="col">TYPE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{$blog->id}}</th>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->slug}}</td>
                        <td>{{$blog->type}}</td>
                        <td><a href="{{route("blog.edit",$blog->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>
                        <td>
                            <form action="{{route("blog.destroy",$blog->id)}}" method="post">
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


























{{--    <section class="ftco-section bg-light">--}}
{{--        <div>--}}
{{--            <a href="{{route("blog.create")}}" class="float-left read btn btn-primary">create one</a>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($blogs as $blog)--}}
{{--                    <div class="col-md-4 ftco-animate">--}}
{{--                        <div class="blog-entry">--}}
{{--                            <a href="{{route('singlepage',$blog->title)}}" class="block-20" style="background-image: url('{{$blog->image}}');">--}}
{{--                                <img src="{{asset("upload/".$blog->image)}}" class="img img-fluid" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="text px-4 pt-3 pb-4">--}}
{{--                                <div class="meta">--}}
{{--                                    <div><a href="#">{{\Carbon\Carbon::make($blog->created_at)->toDateString()}}</a></div>--}}
{{--                                    <div><a href=""></a>{{$blog->user->name}}</div>--}}
{{--                                </div>--}}
{{--                                <h3 class="heading"><a href="">{{$blog->title}}</a></h3>--}}
{{--                                <p class="clearfix">--}}
{{--                                    <a href="#" class="float-left read btn btn-primary">Read more</a>--}}
{{--                                    <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span>{{$blog->comments_count}}</a>--}}
{{--                                    <a href="{{route("blog.edit",$blog->id)}}" class="float-right meta-chat" method=""><span class="fa fa-edit"></span></a>--}}
{{--                                <form action="{{route("blog.destroy",$blog->id)}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}
{{--                                    <button class="float-right meta-chat btn"><span class="fa fa-remove"></span></button>--}}
{{--                                </form>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="row no-gutters my-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <div class="block-27">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">&lt;</a></li>--}}
{{--                            <li class="active"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a href="#">&gt;</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection

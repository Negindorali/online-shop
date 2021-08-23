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

    <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                @if($errors->any())
                    <div class="alert alert-info">
                        <ol>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ol>
                    </div>
                @endif
                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="{{route("blog.update",$blog->id)}}" class="appointment-form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put');
                        <h3 class="mb-3">WRITE YOUR ARTICLE!</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" name="title" class="form-control" placeholder="Title" value="{{old(\App\Models\Blog::TITLE,$blog->title)}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{old(\App\Models\Blog::SLUG,$blog->slug)}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select id="" class="form-control" name="type">
                                                <option value="">Type</option>
                                                <option>Blog</option>
                                                <option>Twitt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control py-5" placeholder="Content" name="content" value="{{old(\App\Models\Blog::CONTENT,$blog->content)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row col-md-10">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="SAVE YOUR ARTICLE !" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input class="btn btn-default py-3 px-4" id="formFileLg" name="{{\App\Models\Blog::IMAGE}}" type="file" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-2 w-100 mr-md-2" style="background-image: url({{asset('templateassets/images/bg_6.jpg')}});"></div>
                    <div class="img img-2 w-100 ml-md-2" style="background-image: url({{asset('templateassets/images/bg_4.jpg')}});"></div>
                </div>
                <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">This is our secrets</span>
                        <h2 class="mb-4">Perfect Ingredients</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                        </p>
                        <p><a href="#" class="btn btn-primary">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
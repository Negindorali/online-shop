@extends('layouts.template.master')
@section('content')

    <section class="hero-wrap hero-wrap-2 img-fluid" style="background-image: url('{{asset("upload/".$blog->image)}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Blog Single</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    @if($errors->any())
                        <div class="alert alert-info">
                            <ol>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif

                    <h2 class="mb-3">{{$blog->slug}}</h2>
                    <p>{{$blog->title}}</p>
                    <p>{{$blog->content}}</p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($blog->tags as $tag)
                                <a href="#" class="tag-cloud-link">{{$tag->title}}</a>
                                <a href="#" class="tag-cloud-link">{{$tag->slug}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">{{count($blog->comments)}} Feedbacks</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                @foreach($blog->comments as $comment)
                                <div class="comment-body">
                                    <h3>{{$comment->user->name}}</h3>
                                    <div class="meta mb-2">{{\Carbon\Carbon::make($comment->created_at)->diffForHumans()}}</div>
                                    <p>{{$comment->content}}</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                    <form action="{{route("comment.destroy",$comment->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                   <p><button  class="reply btn" style="font-size: 8pt !important;">delete</button></p>
                                    </form>
                                </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                        <!-- END comment-list -->
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Leave a comment</h3>
                            <form action="{{route("comment.store")}}" class="p-4 p-md-5 bg-light" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="{{\App\Models\Comment::USER_NAME}}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="{{\App\Models\Comment::CONTENT}}" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    <input type="hidden" class="form-control"  name="{{\App\Models\Comment::BLOG_ID}}" value="{{$blog->id}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Popular Articles</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset('templateassets/images/image_1.jpg')}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Aug. 3, 2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div><!-- END COL -->
            </div>
        </div>
    </section>
@endsection
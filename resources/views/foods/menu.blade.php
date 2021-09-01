@extends('layouts.template.master')
@section('ex-title','MENUS')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('templateassets/images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Breakfast</h3>
                        </div>
                        @foreach($food->where(\App\Models\Food::CATEGORY_ID,1) as $foood)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background:url('{{asset("upload/".$foood->image)}}');background-size: cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{$foood->name}}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">{{$foood->price}}</span>
                                    </div>
                                </div>
                                <p><span>{{$foood->nutrients}}</span></p>
                            </div>
{{--                            <button class="btn like" data-like=""><i class="fa fa-thumbs-o-up"></i><span class="likecount"></span></button>--}}
                            <button class="btn like" data-like ="{{$foood->id}}"><i class="fa fa-thumbs-o-up"></i><span class="ml-2 mr-3" class="likecount">{{count($foood->likeable)}}</span></button>
                        </div>
                       @endforeach
                        </div>
                        <span class="flat flaticon-bread" style="left: 0;"></span>
                        <span class="flat flaticon-breakfast" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Lunch</h3>
                        </div>
                        @foreach($food->where(\App\Models\Food::CATEGORY_ID,2) as $foood)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url('{{asset("upload/".$foood->image)}}');background-size: cover"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{$foood->name}}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">{{$foood->price}}</span>
                                    </div>
                                </div>
                                <p><span>{{$foood->nutrients}}</span></p>
                            </div>
                            <button class="btn like" data-like="{{$foood->id}}"><i class="fa fa-thumbs-o-up"></i><span class="likecount">{{count($foood->likeable)}}</span></button>
                        </div>
                        @endforeach
                        <span class="flat flaticon-pizza" style="left: 0;"></span>
                        <span class="flat flaticon-chicken" style="right: 0;"></span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Dinner</h3>
                        </div>
                        @foreach($food->where(\App\Models\Food::CATEGORY_ID,3) as $foood)
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{asset('templateassets/images/dinner-1.jpg')}});"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{$foood->name}}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">{{$foood->price}}</span>
                                    </div>
                                </div>
                                <p><span>{{$foood->nutrients}}</span></p>
                            </div>
                            <button class="btn like" data-like="{{$foood->id}}"><i class="fa fa-thumbs-o-up"></i><span class="likecount">{{count($foood->likeable)}}</span></button>
                        </div>
                        @endforeach
                        <span class="flat flaticon-omelette" style="left: 0;"></span>
                        <span class="flat flaticon-burger" style="right: 0;"></span>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Desserts</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{asset('templateassets/images/dessert-1.jpg')}});"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="#" class="appointment-form">
                        <h3 class="mb-3">Book your Table</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control book_date" placeholder="Check-In">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" class="form-control book_time" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Guest</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('ex-js')
    <script>
        $('.like').click(function (){
            const element = $(this)

            const item = $(this).data('like');
            $.ajax({
                method : "get",
                url:`{{route('food.api')}}?food_id=${item}`,
                processData:false,
                contentType:false,
                statusCode:{
                    401:function (){
                        swal("Error","You must be authenticate first!","error")
                    }
                }
            }).done(function (data){
                $(element).text(data)
            })
        })
    </script>

@endsection
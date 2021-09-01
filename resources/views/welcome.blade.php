<!DOCTYPE html>
<html lang="en">
@include('layouts.template.header')
<body>
@include('layouts.template.sidebar')

<section class="hero-wrap">
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url({{asset('templateassets/images/bg_1.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 mt-5 text-center">
                            <span class="subheading"><h2>Venous Restaurant</h2></span>
                            <h1>Cooking Since</h1>
                            <span class="subheading-2">1958</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url({{asset('templateassets/images/bg_2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 mt-5 text-center">
                            <span class="subheading"><h2>Venous Restaurant</h2></span>
                            <h1>Best Quality</h1>
                            <span class="subheading-2 sub">Food</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url({{asset('templateassets/images/about.jpg')}});">
                <div class="row pb-5 pb-md-0">
                    <div class="col-md-12 col-lg-7">
                        <div class="heading-section mt-5 mb-4">
                            <div class="pl-lg-3 ml-md-5">
                                <span class="subheading">About</span>
                                <h2 class="mb-4">Welcome to Taste.it</h2>
                            </div>
                        </div>
                        <div class="pl-lg-3 ml-md-5">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url({{asset('templateassets/images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span>Now Booking</span>
                <h2>Private Dinners &amp; Happy Hours</h2>
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
                    </div>
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/dessert-2.jpg')}});"></div>
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
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/dessert-3.jpg')}});"></div>
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
                    <span class="flat flaticon-cupcake" style="left: 0;"></span>
                    <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Wine Card</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/wine-1.jpg')}});"></div>
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/wine-2.jpg')}});"></div>
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
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/wine-3.jpg')}});"></div>
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
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Drinks &amp; Tea</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/drink-1.jpg')}});"></div>
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/drink-2.jpg')}});"></div>
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
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('templateassets/images/person_1.jpg')}});"></div>
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
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ftco-section testimony-section" style="background-image: url({{asset('templateassets/images/person_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{asset('templateassets/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{asset('templateassets/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{asset('templateassets/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{asset('templateassets/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{asset('templateassets/images/person_1.jpg')}})">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
                <h2 class="mb-4">Our Master Chef</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{asset('templateassets/images/person_2.jpg')}});"></div>
                    <div class="text px-4 pt-2">
                        <h3>John Gustavo</h3>
                        <span class="position mb-2">CEO, Co Founder</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{asset('templateassets/images/chef-2.jpg')}});"></div>
                    <div class="text px-4 pt-2">
                        <h3>Michelle Fraulen</h3>
                        <span class="position mb-2">Head Chef</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{asset('templateassets/images/chef-3.jpg')}});"></div>
                    <div class="text px-4 pt-2">
                        <h3>Alfred Smith</h3>
                        <span class="position mb-2">Chef Cook</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{asset('templateassets/images/chef-1.jpg')}});"></div>
                    <div class="text px-4 pt-2">
                        <h3>Antonio Santibanez</h3>
                        <span class="position mb-2">Chef Cook</span>
                        <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
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

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Blog</h2>
            </div>
        </div>
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
                                <a href="{{route('singlepage',$blog->title)}}" class="float-left read btn btn-primary">Read more</a>
                                <a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span>{{$blog->comments_count}}</a>
                                <a href="#" class="float-right meta-chat"><span class="fa fa-heart-o"></span>{{$blog->likeable_count}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
    <div class="container py-5">
        <div class="row py-2">
            <div class="col-md-12 text-center">
                <h2>We Make Delicious &amp; Nutritious Food</h2>
                <a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.template.footer')

</body>
</html>

<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+98 991 617 5068</a> or <span class="mailus">email us:</span> <a href="#">vendraa.78@gmail.com</a></p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <p class="mb-0">{{\Carbon\Carbon::now()}}</p>
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">VENOUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item "><a href="{{ url('/home') }}" class="nav-link">{{auth()->user()->name}}</a></li>
                    @else
                        <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">login</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ url('register') }}" class="nav-link">register</a></li>
                        @endif
                    @endauth
                @endif
                <li class="nav-item"><a href="{{url('/chefs')}}" class="nav-link">chef</a></li>
                <li class="nav-item"><a href="{{url('/food/menu')}}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{url('/blogslist')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{url('/aboutvenous')}}" class="nav-link">about</a></li>
                <li class="nav-item"><a href="{{url('/contactus')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->



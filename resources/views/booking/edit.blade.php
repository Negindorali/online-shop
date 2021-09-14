@extends('layouts.dashboard.master')



@section('content')

    <section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">BOOKING</h1>
            </div>
        </div>
    </section>
    <form enctype="multipart/form-data" action="{{route("booking.update",$booking->id)}}" method="post">
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
        @method('put')
        <div class="form-group row p-5">
            <div class="col-md">
                <label for="{{\App\Models\Booking::CHECK_IN}}">CHECK_IN </label>
                <input type="date" name="{{\App\Models\Booking::CHECK_IN}}" id="{{\App\Models\Booking::CHECK_IN}}" required class="form-control" value="{{old(\App\Models\Booking::CHECK_IN,$booking->check_in)}}">
            </div>
        </div>
        <div class="form-group row p-5">
            <div class="col-md">
                <label for="{{\App\Models\Booking::CLOCK}}">CLOCK</label>
                <input type="time" name="{{\App\Models\Booking::CLOCK}}" id="{{\App\Models\Booking::CLOCK}}" required class="form-control" value="{{old(\App\Models\Booking::CLOCK,$booking->clock)}}">
            </div>
            <div class="form-group col-md">
                <label for="{{\App\Models\Booking::GUEST}}">GUEST</label>
                <select class="form-control" name="{{\App\Models\Booking::GUEST}}" id="{{\App\Models\Booking::GUEST}}">
                    {{--                    @foreach($category as $title)--}}
                    <option>GUEST</option>
                    <option>1</option>
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>10</option>
                    {{--                    @endforeach--}}
                </select>
            </div>
        </div>
        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            save
        </button>
    </form>
@endsection


@extends('layouts.dashboard.master')
@section('content')
    <section>
        <div class="col-md ">
            <a class="btn btn-success m-5 text-white"  href="{{route("booking.create")}}">BOOKING YOUR TABLE</a>
            <table class="table m-5">
                <caption>BOOKING LIST</caption>
                <thead>
                <tr>
                    <th scope="col">ROW</th>
                    <th scope="col">CLOCK</th>
                    <th scope="col">DATE</th>
                    <th scope="col">GUEST</th>
                </tr>
                </thead>
                <tbody>
                @foreach($booking as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->clock}}</td>
                        <td>{{\Carbon\Carbon::make($book->check_in)->toDateString()}}</td>
                        <td><a href="{{route("booking.edit",$book->id)}}"><i class="fa fa-edit fa-2x"></i></a></td>
                        <td>
                            <form action="{{route("booking.destroy",$book->id)}}" method="post">
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

@endsection
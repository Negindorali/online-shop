@extends('layouts.dashboard.master')
@section('ex-title','Edit Food')
@section('content')
    <form action="{{route("food.update",$food->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Food::Name}}">FOOD NAME </label>
                <input type="text" name="{{\App\Models\Food::Name}}" id="{{\App\Models\Food::Name}}" required class="form-control" placeholder="FOOD NAME" value="{{old(\App\Models\Food::Name,$food->name)}}">
            </div>
            <div class="col-md"></div>
        </div>

        <div class="form-group row">
            <div class="col-md">
                <label for="{{\App\Models\Food::PRICE}}">FOOD PRICE</label>
                <input type="number" name="{{\App\Models\Food::PRICE}}" id="{{\App\Models\Food::PRICE}}" required class="form-control" placeholder="FOOD PRICE" value="{{old(\App\Models\Food::PRICE,$food->price)}}">
            </div>
            <div class="form-group col-md">
                <label for="{{\App\Models\Food::TYPE}}">FOOD TYPE</label>
                <select class="form-control" name="{{\App\Models\Food::TYPE}}" id="{{\App\Models\Food::TYPE}}"  placeholder="FOOD TYPE" value="{{old(\App\Models\Food::TYPE,$food->type)}}">
                    <option>FOOD</option>
                    <option>DRINKS</option>
                    <option>WINE</option>
                </select>
            </div>
        </div>

        <button class="btn btn-success rounded">
            <i class="fa fa-save mx-2"></i>
            UPDATE
        </button>
    </form>
@endsection
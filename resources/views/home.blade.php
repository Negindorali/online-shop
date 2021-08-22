@extends('layouts.dashboard.master')

@section('content')
<h1>{{__("hi")}} {{auth()->user()->name}}</h1>
@endsection
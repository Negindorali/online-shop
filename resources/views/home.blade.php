@extends('layouts.dashboard.master')

@section('content')
<h1>{{__("welcome")}} {{auth()->user()->name}}</h1>
@endsection
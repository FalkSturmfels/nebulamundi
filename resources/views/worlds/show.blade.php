@extends('layout')

@section('content')
    <div class="container">
        <h1>{{$world->name}}</h1>
        <h3>{{$world->description}}</h3>
    </div>
@endsection
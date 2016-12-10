@extends('layout')

@section('content')
    <div class="container">
        <h1>{{$world->name}}</h1>
        <h3>{{$world->description}}</h3>

        <ul>
            @foreach($world->adventures as $adventure)
                <li><b>{{$adventure->name}}</b> - {{$adventure->description}}</li>
            @endforeach
        </ul>
    </div>
@endsection
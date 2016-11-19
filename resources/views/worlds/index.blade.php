@extends('layout')

@section('content')
    <div class="container">
        <h1>Der Schleier</h1>

        <ul>
            @foreach($worlds as $world)
                <li><a href="{{ url('/worlds', $world->id)}}">{{$world->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
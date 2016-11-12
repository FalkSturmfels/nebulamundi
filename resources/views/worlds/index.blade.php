@extends('layout')

@section('content')
    <div class="container">
        <h1>Der Schleier</h1>
        <h2>- die Welt zwischen den Welten</h2>

        @foreach($worlds as $world)
            <li>{{$world->name}}</li>
        @endforeach
        {{--{{$worlds}}--}}
    </div>
@endsection
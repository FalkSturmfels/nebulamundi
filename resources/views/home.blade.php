@extends('layout')

@section('content')
    <div class="container">
        <h1>Willkommen in Nebula Mundi</h1>
        <h2>- den Nebelwelten...</h2>

        <a href="{{action("EditorController@start")}}"> Editor</a>
    </div>
@endsection
@extends('layout')

@section('content')

    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' =>  'Übersicht'])


    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
                <a href="{{action('WorldDefController@index')}}"
                   class="list-group-item list-group-item">Zurück</a>
                <a href="{{action('AdventureController@index', ['id' =>$world->id])}}"
                   class="list-group-item">Abenteuer</a>
            </div>
        </div>
        <div class="col-sm-10">
                {{$world->description}}
            </div>
    </div>

@endsection
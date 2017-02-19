@extends('layout')

@section('content')

    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' =>  'Übersicht'])

    <div class="row" >
        <div class="col-sm-6">{{$world->description}}</div>
    </div>
    <div class="verticalSpacer"></div>
    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
                <a href="#" class="list-group-item">Abenteuer</a>
            </div>
        </div>
    </div>

@endsection
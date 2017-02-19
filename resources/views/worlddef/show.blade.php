@extends('layout')

@section('content')

    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' =>  'Übersicht'])

    <div class="row" >
        <div class="col-sm-6">{{$world->description}}</div>
    </div>
@endsection
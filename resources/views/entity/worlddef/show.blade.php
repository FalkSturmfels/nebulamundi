@extends('layout')

@section('content')

    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' =>  'Übersicht'])


    <div class="row">
        @include('entity.worlddef.partials.show.menu', ['world' => $world])
        @include('entity.worlddef.partials.show.overview', ['world' => $world])
    </div>

@endsection
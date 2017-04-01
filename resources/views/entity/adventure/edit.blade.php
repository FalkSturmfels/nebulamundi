@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Weltenformung',
                                 'subHeadline' => 'Abenteuer bearbeiten' ])

    @include('partials.global.erros')

    <form class="form-horizontal" method="post" action="{{action('AdventureController@update', [$world->id ,$adventure->id])}}">
        {{method_field('PATCH')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('partials.forminputs.simpleentitydef', ['entity' => $adventure])

    </form>
    </div>

@endsection
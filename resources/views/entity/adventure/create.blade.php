@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Weltenschöpfung',
                                 'subHeadline' => 'Neues Abenteuer anlegen' ])

    @include('partials.global.erros')

    <form class="form-horizontal" method="post" action="{{action('AdventureController@create', ['id' => $world->id])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('partials.forminputs.simple_entity_def', ["entity" => null])

    </form>
    </div>

@endsection
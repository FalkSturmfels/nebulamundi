@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Weltenformung',
                                 'subHeadline' => 'Welt ändern' ])

    @include('partials.global.erros')

    <form class="form-horizontal" method="post" action="{{action('WorldDefController@update', $world->id)}}">
        {{method_field('PATCH')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('partials.forminputs.simple_entity_def', ['entity' => $world])

    </form>
    </div>

@endsection
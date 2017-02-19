@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Weltenschöpfung',
                                 'subHeadline' => 'Neue Welt anlegen' ])

    @include('partials.global.erros')

    <form class="form-horizontal" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('partials.forminputs.simpleentitydef', ["entity" => null])

    </form>
    </div>

@endsection
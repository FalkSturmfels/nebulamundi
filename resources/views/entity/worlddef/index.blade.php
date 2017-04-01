@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Die Nebelkammer',
                                 'subHeadline' => 'die Geburtsstätte neuer Welten' ])

    <div class="row">
        @include('entity.worlddef.partials.index.menu')
        @include('entity.worlddef.partials.index.grid', ['worlds' => $worlds])
    </div>

    @include('partials.dialogs.removedialog', ['entityUrl' => 'worlddefs/'])

@endsection
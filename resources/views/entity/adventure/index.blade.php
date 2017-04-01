@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' => 'Abenteuer' ])

    <div class="row">
        @include('entity.adventure.partials.index.menu', ['worldId' => $world->id])

        @include('entity.adventure.partials.index.grid', ['adventures' => $adventures])
    </div>

    @include('partials.dialogs.removedialog', ['entityUrl' => 'adventures/'])

@endsection
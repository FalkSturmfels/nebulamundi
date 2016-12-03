@extends('layout')

@section('content')
    @include('partials.header', ['headline' => 'Die Nebelkammer',
                                 'subHeadline' => 'die Geburtsstätte neuer Welten' ])


    <div class="row">
            <div class="col-sm-2">
                <div class="list-group">
                    <a class="list-group-item" href="">Welten</a>
                    <a class="list-group-item" href="">Kalender</a>
                    <a class="list-group-item" href="">Währung</a>
                </div>
            </div>
            <div class="col-sm-10"></div>
        </div>
    </div>
@endsection
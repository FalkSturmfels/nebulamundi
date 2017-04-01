@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Die Nebelkammer',
                                 'subHeadline' => 'die Geburtsstätte neuer Welten' ])

    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
                <a href="{{url('/')}}"
                   class="list-group-item list-group-item">Zurück</a>
                <a href="{{action('WorldDefController@create')}}"
                   class="list-group-item">Neue Welt</a>
            </div>
        </div>
        <div class="col-sm-10">
            @for($i=0; $i < $worlds->count(); $i++)
                @if($i % 4 == 0)
                    <div class="row">
                @endif
                        <div class="col-sm-3">
                            <li class="list-group-item" data-toggle="tooltip" title="{{$worlds[$i]->description}}">
                                <a href="{{action('WorldDefController@edit', ['id' => $worlds[$i]->id])}}"
                                   style="position: absolute; right:35px;">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a style="position: absolute; right:15px;" data-toggle="modal" href="#removeDialog"
                                   data-backdrop="static" data-entity="{{$worlds[$i]}}">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                <a href="{{action('WorldDefController@show', ['id' => $worlds[$i]->id])}}">
                                    <h5>{{$worlds[$i]->name}}</h5>
                                </a>
                            </li>
                        </div>
                @if($i % 4 == 3)
                    </div>
                    <div class="verticalSpacer"></div>
                @endif
            @endfor
        </div>
    </div>

    @include('partials.dialogs.removedialog', ['entityUrl' => 'worlddefs/'])

@endsection
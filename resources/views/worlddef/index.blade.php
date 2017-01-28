@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => 'Die Nebelkammer',
                                 'subHeadline' => 'die Geburtsstätte neuer Welten' ])

    <div class="row">
        <div class="col-sm-3">
            <a href="{{action('WorldDefController@create')}}">
                <h5>Neue Welt erschaffen ...</h5>
            </a>
        </div>
    </div>
    <div class="verticalSpacer"></div>

    @include('partials.global.subheader', ['headline' => 'Welten'])

    @for($i=0; $i < $worlds->count(); $i++)
        @if($i % 4 == 0)
            <div class="verticalSpacer"></div>
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
        @endif
    @endfor
    <div class="verticalSpacer"></div>

    @include('partials.dialogs.removedialog', ['entityUrl' => 'worlddefs/'])

@endsection
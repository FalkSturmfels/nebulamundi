@extends('layout')

@section('content')
    @include('partials.global.header', ['headline' => $world->name,
                                 'subHeadline' => 'Abenteuer' ])

    <div class="row">
        <div class="col-sm-3">
            <a href="{{action('AdventureController@create',['id' => $world->id])}}">
                <h5>Neues Abenteuer erschaffen ...</h5>
            </a>
        </div>
    </div>
    <div class="verticalSpacer"></div>

    @include('partials.global.subheader', ['headline' => 'Abenteuer'])

    @for($i=0; $i < $adventures->count(); $i++)
        @if($i % 4 == 0)
            <div class="verticalSpacer"></div>
            <div class="row">

                @endif

                <div class="col-sm-3">
                    <li class="list-group-item" data-toggle="tooltip" title="{{$adventures[$i]->description}}">
                        <a href="{{action('AdventureController@edit', ['id' => $adventures[$i]->id])}}"
                           style="position: absolute; right:35px;">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <a style="position: absolute; right:15px;" data-toggle="modal" href="#removeDialog"
                           data-backdrop="static" data-entity="{{$adventures[$i]}}">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        <a href="{{action('AdventureController@show', ['id' => $adventures[$i]->id])}}">
                            <h5>{{$adventures[$i]->name}}</h5>
                        </a>
                    </li>
                </div>

                @if($i % 4 == 3)
            </div>
        @endif
    @endfor
    <div class="verticalSpacer"></div>

    @include('partials.dialogs.removedialog', ['entityUrl' => 'adventures/'])

@endsection
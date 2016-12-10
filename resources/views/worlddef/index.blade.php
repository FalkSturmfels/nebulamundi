@extends('layout')

@section('content')
    @include('partials.header', ['headline' => 'Die Nebelkammer',
                                 'subHeadline' => 'die Geburtsstätte neuer Welten' ])

    <div class="row">
        <div class="col-sm-2"><a class="list-group-item" href="{{action('WorldDefController@create')}}">
                <h5>Neue Welt erschaffen</h5>
                <p>...</p>
            </a>
        </div>

        @foreach($worldGrid[0] as $world)
            <div class="col-sm-2">
                <a class="list-group-item" href="{{action('WorldDefController@show', ['id' => $world->id])}}">
                    <h5>{{$world->name}}</h5>
                    <p>
                        <small>{{$world->description}}</small>
                    </p>
                </a>
            </div>
        @endforeach
    </div>

    @for($i=1; $i < $worldGrid->count(); $i++)
        <div class="verticalSpacer"></div>
        <div class="row">
            @foreach($worldGrid[$i] as $world)
                <div class="col-sm-2">
                    <a class="list-group-item" href="{{action('WorldDefController@show', ['id' => $world->id])}}">
                        <h5>{{$world->name}}</h5>
                        <p>
                            <small>{{$world->description}}</small>
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    @endfor

@endsection
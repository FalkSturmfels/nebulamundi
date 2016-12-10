@extends('layout')

@section('content')
    @include('partials.header', ['headline' => 'Der Schleier',
                                 'subHeadline' => 'die Welt zwischen den Welten' ])

    <div class="row">
        <div class="col-sm-3">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    {{$selectedUser->name}}
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($users as $user)
                        <li><a href="{{action('WorldController@worldsByUser', $user->id)}}">
                                {{$user->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="verticalSpacer"></div>

    <div class="row">
        <div class="col-sm-4">
            <div class="list-group">
                @foreach($worlds as $world)
                    <a class="list-group-item" href="{{ action('WorldController@show', $world->id)}}">{{$world->name}}
                        <small> - {{$world->description}} </small>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    </div>
@endsection
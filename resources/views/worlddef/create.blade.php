@extends('layout')

@section('content')
    @include('partials.header', ['headline' => 'Weltenschöpfung',
                                 'subHeadline' => 'Neue Welt anlegen' ])


    <form class="form-horizontal" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name" class="col-sm-1 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
            </div>

        </div>

        <div class="form-group">
            <label for="description" class="col-sm-1 control-label">Beschreibung</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Beschreibung"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-default">Speichern</button>
            </div>
        </div>
    </form>
    </div>

@endsection
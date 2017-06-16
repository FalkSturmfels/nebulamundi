@extends('layout')

@section('content')
    <div class="container">
        <h1>EditorTest</h1>
        <h2>- den Nebelwelten...</h2>

        <form class="form-horizontal" method="post" action="{{action('EditorController@show')}}">
            {{method_field('PATCH')}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">

                <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="editor" name="html"
                ></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Speichern</button>
                </div>
            </div>

        </form>

    </div>
@endsection

@section('scriptingaddition')
    {{Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}
    <script>
        var options = {
            height : 100,
            filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('editor', options);
    </script>
@endsection


<div class="col-sm-2">
    <div class="list-group">
        <a href="{{action('WorldDefController@index')}}"
           class="list-group-item list-group-item">Zurück</a>
        <a href="{{action('AdventureController@index', ['id' =>$world->id])}}"
           class="list-group-item">Abenteuer</a>
    </div>
</div>
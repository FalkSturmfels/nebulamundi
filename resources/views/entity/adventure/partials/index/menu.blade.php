<div class="col-sm-2">
    <div class="list-group">
        <a href="{{action('WorldDefController@show', ['id' => $world->id])}}"
           class="list-group-item list-group-item">Zurück</a>
        <a href="{{action('AdventureController@create', ['id' => $world->id])}}"
           class="list-group-item list-group-item">Neues Abenteuer</a>
    </div>
</div>
<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name* </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Name" @if($entity) value="{{$entity->name}}"@endif/>
    </div>
</div>

<div class="form-group">
    <label for="description" class="col-sm-1 control-label">Beschreibung*</label>
    <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="description" name="description"
                          placeholder="Beschreibung">@if($entity){{$entity->description}}@endif</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-default">Speichern</button>
    </div>
</div>
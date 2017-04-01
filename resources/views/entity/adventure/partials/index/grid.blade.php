<div class="col-sm-10">
    @for($i=0; $i < $adventures->count(); $i++)
    @if($i % 4 == 0)
    <div class="row">
        @endif
        <div class="col-sm-3">
            <li class="list-group-item" data-toggle="tooltip" title="{{$adventures[$i]->description}}">
                <a href="{{action('AdventureController@edit', ['world' => $world->id, 'id' => $adventures[$i]->id])}}"
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
    <div class="verticalSpacer"></div>
    @endif
    @endfor
</div>
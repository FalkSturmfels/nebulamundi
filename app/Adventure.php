<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    public function world()
    {
        return $this->belongsTo(World::class);
    }
}

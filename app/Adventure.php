<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $fillable = ['name', 'description', 'status'];

    public function world()
    {
        return $this->belongsTo(World::class);
    }
}

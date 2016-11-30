<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{

    protected $fillable = ['name', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adventures()
    {
        return $this->hasMany(Adventure::class);
    }
}

<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function scopeOwnWorlds($query)
    {
        return $query->where('user_id', Auth::user()->id)->get();
    }

    public function scopeByUserId($query, $id)
    {
        return $query->where('user_id', $id)->get();
    }

    public function addAdventure(Adventure $entity)
    {
        return $this->adventures()->save($entity);
    }
}

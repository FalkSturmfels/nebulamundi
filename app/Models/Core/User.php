<?php

namespace App\Models\Core;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function worlds()
    {
        return $this->hasMany(World::class);
    }

    public function addWorld(World $entity)
    {
        return $this->worlds()->save($entity);
    }
}

<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function days()
    {
        $this->hasMany(Day::class);
    }
}

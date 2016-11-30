<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Model;

class DayDef extends Model
{
    public function days()
    {
        return $this->hasMany(Day::class);
    }
}

<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    public function dayDef()
    {
        return $this->belongsTo(DayDef::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }
}

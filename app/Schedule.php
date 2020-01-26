<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    protected $dates = ['from', 'to'];
    //
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}

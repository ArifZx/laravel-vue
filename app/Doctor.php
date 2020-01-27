<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Doctor extends Model
{
    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'doctor_id');
    }

    public function activeSchedules()
    {
        return $this->hasMany(Schedule::class, 'doctor_id')->where('to', '>=', Carbon::now());
    }

}

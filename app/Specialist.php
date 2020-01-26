<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}

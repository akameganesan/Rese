<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    public function reservations()
    {
        return $this->belongsToy('App\Models\Shops');
    }
    public function res_user()
    {
        return $this->belongsTo('App\Models\Reservations');
    }
}

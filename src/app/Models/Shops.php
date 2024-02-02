<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->belongsTo('App\Models\Areas');
    }
    public function genres()
    {
        return $this->belongsTo('App\Models\Genres');
    }

    public function reservations()
    {
        return $this->hasMany('App\Models\reservations');
    }

    public function favorites()
    {
        return $this->belongsTo('App\Models\favorites');
    }



}

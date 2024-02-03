<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Shops');
    }

}

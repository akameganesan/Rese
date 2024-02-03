<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    public function shop_genres()
    {
        return $this->hasMany('App\Models\Shops');
    }

}

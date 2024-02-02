<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    public function shop_areas()
    {
        return $this->hasMany('App\Models\Shops');
    }
}

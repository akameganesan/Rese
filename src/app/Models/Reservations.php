<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\User;

class Reservations extends Model
{
    use HasFactory;

    public function reservations()
    {
        //return $this->belongsToy('App\Models\Shops');
        return $this->hasMany('App\Models\Shops');
    }
    public function res_user()
    {
        //return $this->belongsTo('App\Models\Reservations');
        return $this->hasMany('App\Models\Reservations');

    }

    protected $fillable = [
        'user_id',
        'shop_id',
        'start_at',
        'member_num'
    ];
}

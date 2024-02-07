<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;

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

    protected $fillable = [
        'user_id',
        'shop_id',
    ];

}

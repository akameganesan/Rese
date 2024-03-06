<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Reservations;
use App\Models\User;

class Genres extends Model
{
    use HasFactory;

    public function genres_1()
    {
        return $this->belongsTo('App\Models\Shops');
    }

    protected $fillable = [
        'name',
    ];

    protected $guarded = [
        'id',
        'created_at'
    ];

}

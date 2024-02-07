<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;

class Areas extends Model
{
    use HasFactory;
    /* public function shop_areas()
     {
         return $this->hasMany('App\Models\Shops');
     }*/

    protected $fillable = [
        'name',
    ];

    public function areas1()
    {
        return $this->hasMany(Shops::class, 'area_id', 'name');
    }

    //public function areas_1()
    //{
    //    return $this->belongsTo('App\Models\Shops');
    //}


    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . optional($this->areas)->name . ')';
    }

    //public function getTitle()
    //{
    //    return 'ID' . $this->id . ':' . $this->name;
    //    // return 'ID' . $this->id . ':' . $this->name;
    //}

    protected $guarded = [
        'id',
        'created_at'
    ];
}

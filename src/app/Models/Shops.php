<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;


class Shops extends Model
{
    use HasFactory;

    public function shops1()
    {
        return $this->belongsTo(Areas::class, 'area_id', 'name');
    }

    public function areas()
    {
        return $this->hasMany('App\Models\Areas');
    }

    /*public function areas()
    {
        return $this->belongsTo('App\Models\Areas');
    }*/
    public function genres()
    {
        return $this->hasMany('App\Models\Genres');
    }

    public function reservations()
    {
        return $this->hasMany('App\Models\reservations');
    }

    public function favorites()
    {
        return $this->belongsTo('App\Models\favorites');
    }

    protected $fillable = [
        'area_id',
        'genre_id',
        'name',
        'description',
        'img_url'
    ];

    protected $guarded = array('id');
    public static $rules = array(
        'area_id' => 'required',
        'title' => 'required',
    );


    /*public function getTitle()
    {
        return 'ID' . $this->id . ':' . $this->name;
    }

    public function getData()
    {
        return $this->id . ': ' . $this->title . ' (' . optional($this->person)->name . ')';
    }*/



    public function getData()
    {
        return $this->area_id . ': ' . $this->name . ' (' . optional($this->areas)->name . ')';
    }

    public function getTitle()
    {
        return 'ID' . $this->id . ':' . $this->name . ' エリア:' . optional($this->areas1)->name;
    }

    public function getAreas()
    {
        return $this->belongsTo(Areas::class, 'area_id', 'name');
    }


}

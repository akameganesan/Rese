<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;


class ShopController extends Controller
{
    //
    public function index()
    {
        $shops = Shops::all();
        //$shops = Shops::with('areas')->get();
        //$sh = Shops::find(1)->shop_areas;
        //$shops = Shops::with('areas', 'genres')->where('id', '2')->first();
        //$shops = Shops::with('areas', 'areas_1', 'genres', 'genres_1')->where('id', '2')->first();
        //$shops = Shops::with('areas', 'genres')->where('id')->get();
        //$shops = Shops::all();

        //$shops = Shops::with('Areas')->get();

        //$shops = Shops::with('areas1')->where('area_id', '2')->first();

        //$shops = Shops::with('Areas')->get();


        $shops = Shops::all();

        return view('index', compact('shops'));




    }
}

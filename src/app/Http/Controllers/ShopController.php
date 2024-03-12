<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;





class ShopController extends Controller
{
    //
    public function index()
    {
        $fav = Favorites::all();
        $keyword = Auth::id();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id', 'favorites.user_id')->get();
        $ssshops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')->where("user_id", "=", $keyword)->get();
        return view('index', compact('shops', 'fav', 'ssshops', 'keyword'));
    }


    public function area(Request $request)
    {
        $keyword = $request->area;
        $key = $request->genre;
        if (empty($key)) {
            $shops = Shops::all()->where("area_id", "=", $keyword);
            $fav = Favorites::all();
        } else {

            $shops = Shops::all()->where("genre_id", "=", $key)->where("area_id", "=", $key);
            $fav = Favorites::all();
        }
        return view('index', compact('shops', 'keyword', 'key', 'fav'));
    }

    public function genre(Request $request)
    {
        $key = $request->genre;
        $key_a = $request->area;
        if (empty($key_a)) {
            $shops = Shops::all()->where("genre_id", "=", $key);
            $fav = Favorites::all();

        } else {

            $shops = Shops::all()->where("area_id", "=", $key_a)->where("genre_id", "=", $key);
            $fav = Favorites::all();
        }
        return view('index', compact('shops', 'key', 'key_a', 'fav'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $key = $keyword;
        $query = Shops::query();
        $shops = $query->where('name', 'like', '%' . $key . '%')->get();
        $fav = Favorites::all();
        return view('index', compact('shops', 'keyword', 'fav'));
    }


    public function detail(Request $request)
    {
        $shopId = $request->shoID;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        $keyword = $request->shoID;
        $shops = Shops::all()->where("id", "=", $keyword)->first();
        return view('description', compact('keyword', 'shops', 'day', 'time', 'num'));

    }


}

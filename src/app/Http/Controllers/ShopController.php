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
        //$shops = Shops::all();
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
        //$user = Auth::id();
        $fav = Favorites::all();

        //$shops = DB::table('Shops')
        //   ->select('shops.id', 'shops.name', 'Favorites.shops_id ')
        //   ->join('Favorites', 'shops.id', '=', 'Favorites.shops_id')->get();
        //->select('first_table.*', 'second_table.some_column as new_column')

        //w$shops = Shops::leftjoin('favorites', 'shops.id', '=', 'favorites.shops_id')->get();
        //$shops = Favorites::join('shops', 'shops.id', '=', 'favorites.shops_id')->get();


        return view('index', compact('shops', 'fav'));


    }

    public function index2()
    {
        //$shops = Shops::all();
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
        //$user = Auth::id();
        $fav = Favorites::all();

        //$shops = DB::table('Shops')
        //   ->select('shops.id', 'shops.name', 'Favorites.shops_id ')
        //   ->join('Favorites', 'shops.id', '=', 'Favorites.shops_id')->get();
        //->select('first_table.*', 'second_table.some_column as new_column')

        $shops = Shops::leftjoin('favorites', 'shops.id', '=', 'favorites.shops_id')->get();
        //$shops = Favorites::join('shops', 'shops.id', '=', 'favorites.shops_id')->get();


        return view('index', compact('shops', 'fav'));


    }

    public function area(Request $request)
    {

        $keyword = $request->area;
        $key = $keyword;
        //$keyword = 1;
        //$sshops = Shops::all();
        //$shops = $query->where('area_id', 'like', '%' . $keyword . '%')->get();
        $shops = Shops::all()->where("area_id", "=", $key);

        //$shops = Shops::all();

        //$fav = Favorites::all();

        $fav = Favorites::all();

        //return view('menu', compact('shops', 'keyword'));
        return view('mypage', compact('shops', 'keyword', 'fav'));


    }

    public function genre(Request $request)
    {

        $keyword = $request->genre;
        $key = $keyword;
        //$keyword = 1;
        //$sshops = Shops::all();
        //$shops = $query->where('area_id', 'like', '%' . $keyword . '%')->get();
        $shops = Shops::all()->where("genre_id", "=", $key);

        //$shops = Shops::all();

        //$fav = Favorites::all();

        $fav = Favorites::all();

        //return view('menu', compact('shops', 'keyword'));
        return view('index', compact('shops', 'keyword', 'fav'));


    }

    public function search(Request $request)
    {

        $keyword = $request->search;
        $key = $keyword;
        //$keyword = 1;
        //$sshops = Shops::all();
        //$shops = $query->where('area_id', 'like', '%' . $keyword . '%')->get();
        //$shops = Shops::all()->where("genre_id", "=", $key);
        //$shops = Shops::all()->where('name', 'like', '%' . $keyword . '%')->get();

        //$shops = Shops::all();

        //$fav = Favorites::all();



        $query = Shops::query();
        $shops = $query->where('name', 'like', '%' . $key . '%')->get();





        $fav = Favorites::all();

        //return view('menu', compact('shops', 'keyword'));
        return view('index', compact('shops', 'keyword', 'fav'));


    }


    public function detail(Request $request)
    {

        //$keyword = $request->search;
        //$key = $keyword;
        //$keyword = 1;
        //$sshops = Shops::all();
        //$shops = $query->where('area_id', 'like', '%' . $keyword . '%')->get();
        //$shops = Shops::all()->where("genre_id", "=", $key);
        //$shops = Shops::all()->where('name', 'like', '%' . $keyword . '%')->get();

        //$shops = Shops::all();

        //$fav = Favorites::all();



        //$query = Shops::query();
        //$shops = $query->where('name', 'like', '%' q. $key . '%')->get();





        //$fav = Favorites::all();

        //return view('menu', compact('shops', 'keyword'));
        //return view('index', compact('shops', 'keyword', 'fav'));

        $shopId = $request->shoID;

        //shoID
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;

        //shoID
        $keyword = $request->shoID;
        $shops = Shops::all()->where("id", "=", $keyword)->first();






        return view('description', compact('keyword', 'shops'));


    }












}

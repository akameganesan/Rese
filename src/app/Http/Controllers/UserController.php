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
use Carbon\Carbon;


class UserController extends Controller
{
    //
    public function mypage()
    {
        return view('mypage');
    }

    public function day(Request $request)
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


        //shoID
        //$keyword = $request->shoID;
        $day = $request->day;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');

        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();


        return view('mypage', compact('day', 'shops', 'fav'));
        //return view('mypage');
    }

    public function time(Request $request)
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


        //shoID
        $time = $request->time;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');
        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();



        return view('mypage', compact('time', 'shops', 'fav'));
    }

    public function num(Request $request)
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


        //shoID
        $num = $request->num;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');

        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();

        //$posts = DB::table('shops')
        // ->join('User', '', '=', 'users.id')
        //->select('posts.*', 'users.name')
        //  ->get();


        return view('mypage', compact('num', 'shops', 'fav'));
    }
}

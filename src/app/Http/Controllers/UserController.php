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
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    //
    public function mypage(Request $request)
    {
        $fav = Favorites::leftJoin('shops', 'shops.id', '=', 'favorites.shops_id')->get();
        $keyword = Auth::id();
        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->where("user_id", "=", $keyword)->get();
        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $user_id = Auth::id();
        $user = User::all()->where("id", "=", $user_id)->first();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')->where("user_id", "=", $keyword)->get();
        $fav1 = Favorites::all();
        $shops1 = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id', 'favorites.user_id')->get();

        return view('mypage', compact('reserv', 'fav', 'shops', 'user', 'shops1', 'fav1', ));
    }

    public function day(Request $request)
    {
        $day = $request->day;
        $shops = Shops::all();
        $fav = Favorites::all();
        return view('mypage', compact('day', 'shops', 'fav'));
    }

    public function time(Request $request)
    {
        $time = $request->time;
        $shops = Shops::all();
        $fav = Favorites::all();
        return view('mypage', compact('time', 'shops', 'fav'));
    }

    public function num(Request $request)
    {
        $num = $request->num;
        $shops = Shops::all();
        $fav = Favorites::all();
        return view('mypage', compact('num', 'shops', 'fav'));
    }


    public function res(Request $request)
    {
        $shop_id = $request->shoID;
        $num = $request->num;
        $shops = Shops::all()->where("id", "=", $shop_id)->first();
        $user = Auth::id();
        $day = $request->day;
        $time = $request->time;
        $user_id = Auth::id();
        $date = $day; // 日付
        // 時間
        $resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time));
        $shopId = $request->shoID;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        $shops = Shops::all()->where("id", "=", $shopId)->first();
        $a = 1;

        return view('description', compact('day', 'time', 'num', 'shops', 'shopId', 'a', 'resTime'));
    }



    public function reservation(ReservationsRequest $request)
    {
        $shop_id = $request->shoID;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        $shops = Shops::all()->where("id", "=", $shop_id)->first();
        $fav = Favorites::all();
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        $fav = Favorites::all();
        $fav = Favorites::all();
        $user_id = Auth::id();
        $date = $day; // 日付
        $time1 = $time;   // 時間
        $resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time1));

        Favorites::create([
            "user_id" => $user_id,
            "shops_id" => $shop_id,
            "start_at" => $resTime,
            "member_num" => $num,
            "created_at" => now(),
            "updated_at" => now(),

        ]);

        return view('description', compact('day', 'time', 'num', 'shops', 'fav'));
    }


    public function done(Request $request)
    {
        $user_id = Auth::id();
        $shop_id = $request->shoID2;
        $resTime = $request->shoID3;
        $num = $request->shoID4;

        Reservations::create([
            "user_id" => $user_id,
            "shop_id" => $shop_id,
            "start_at" => $resTime,
            "member_num" => $num,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return view('done');
    }


    public function comp(Request $request)
    {
        return view('done');
    }

    // 削除機能
    public function delete(Request $request)
    {
        $rid = $request->shoID1;
        $shops = Shops::all();
        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $del = Reservations::all()->where("shop_id", "=", $rid)->first()->delete();
        $fav = Favorites::leftJoin('shops', 'shops.id', '=', 'favorites.shops_id')->get();
        $keyword = Auth::id();
        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->where("user_id", "=", $keyword)->get();
        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $user_id = Auth::id();
        $user = User::all()->where("id", "=", $user_id)->first();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')->where("user_id", "=", $keyword)->get();
        $fav1 = Favorites::all();
        $shops1 = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id', 'favorites.user_id')->get();

        return view('mypage', compact('reserv', 'fav', 'shops', 'user', 'shops1', 'fav1', ));

    }
}

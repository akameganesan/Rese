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


        //$reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->where("user_id", "=", $keyword)->get();





        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();
        $user_id = Auth::id();
        //$user = Auth::id();//

        $user = User::all()->where("id", "=", $user_id)->first();

        //$shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')->select('shops.*', 'favorites.shops_id')->get();

        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')->where("user_id", "=", $keyword)->get();








        $fav1 = Favorites::all();
        $shops1 = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id')
            ->get();

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



    public function test($request)
    {
        //$session = $request->session()->all();
        //$year = 2024;
        //$month = 2;
        //$day = 20;
        //$hour = 17;
        //$minute = 20;
        //$second = 20;


        //$dateWithTime = Carbon::create($year, $month, $day, $hour, $minute, );
        //$dateWithTime = Carbon::create($year, $month, $day, $hour, $minute, $second);
        //$date = '1999-02-22';
        //$time = '9.22';

        //$resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time));


        //$shop_id = $request->shoID;
        //$day = $request->day;
        //$time1 = $request->time;
        //$num = $request->num;
        //$num = $request->num;

        //$shops = Shops::all()->where("id", "=", $shop_id)->first();
        //$fav = Favorites::all();


        //$shops = Shops::all();
        //$user = Auth::id();
        //$day = $request->day;
        //$time = $request->time;
        //$num = $request->num;
        //$fav = Favorites::all();


        //]);


        //$user = Auth::id();
        //$fav = Favorites::all();

        //$user_id = Auth::id();

        //$date = $day; // 日付
        // 時間

        //$resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time));


        //$dateWithTime = Carbon::create($day, $time);

        // 日付と時間を結合してCarbonオブジェクトを作成
        //$combinedDateTime = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time1);

        // 任意の形式にフォーマットする場合
        //$formattedDateTime = $combinedDateTime->format('Y-m-d H:i');

        // 必要に応じてデータベースに保存するなどの処理を行います


        //Favorites::create([
        //    "user_id" => $user_id,
        //   "shops_id" => $shop_id,
        //   "start_at" => $resTime,
        // "member_num" => $num,
        // "created_at" => now(),
        // "updated_at" => now(),

        //]);
        //$day = $request->day;
        $tex = $request->tex;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;

        //$rid = $request->shID1;


        //$a = 1;



        //return view('test', compact('day', 'time', 'num', 'shops', 'fav', 'shopId', 'shopID'));
        //return view('reservation', compact('resTime'));
        return view('test', compact('tex', 'day', 'time', 'num'));
        //return view('test', compact('resTime'));



    }


    public function done(Request $request)
    {

        $user_id = Auth::id();
        $shop_id = $request->shoID2;
        $resTime = $request->shoID3;
        $num = $request->shoID4;
        //$shop_id = $request->shoID2;



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
    public function done2(Request $request)
    {



        $user_id = Auth::id();
        $shop_id = $request->shoID2;
        $resTime = $request->shoID3;
        $num = $request->shoID4;
        //$shop_id = $request->shoID2;



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
        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $user_id = Auth::id();

        $user = User::all()->where("id", "=", $user_id)->first();

        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id')
            ->get();

        $fav1 = Favorites::all();


        $shops1 = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id')
            ->get();



        return view('mypage', compact('reserv', 'fav', 'shops', 'user', 'shops1', 'fav1'));


        //return redirect('index2', compact('keyword', 'key'));
    }





    public function day1(Request $request)
    {

        $day = $request->day;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');

        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();


        return view('description', compact('day', 'shops', 'fav'));
        //return view('mypage');
    }

    public function time1(Request $request)
    {



        //shoID
        $time = $request->time;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');
        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();



        return view('description', compact('time', 'shops', 'fav'));
    }

    public function num1(Request $request)
    {


        $num = $request->num;
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$a = new Carbon('day');

        $shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();


        return view('description', compact('num', 'shops', 'fav'));
    }

    public function timetest2(Request $request)
    {

        if (empty($request->day)) {
            $day = 1;
        } else {
            $day = $request->day;
        }

        $time = $request->time;

        if (empty($request->time)) {
            $time = 1;
        } else {
            $day = $request->day;
        }







        return view('timetest2', compact('day', 'time'));
    }




}

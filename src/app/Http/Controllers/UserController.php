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



        $shops = Shops::all();


        //$fav = Favorites::all();
        //$reserv = Reservations::all();

        //$fav = Favorites::where('id', 'active')->get();
        $fav = Favorites::leftJoin('shops', 'shops.id', '=', 'favorites.shops_id')->get();
        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();


        $user_id = Auth::id();

        $user = User::all()->where("id", "=", $user_id)->first();

        // 特定の日付を作成
        //$date = Carbon::create($res->start_at);

        // 日付のフォーマットを変更
        //$formattedDate = $date->format('Y-m-d');





        //$dateTime = $res->start_at;
        //$date = $dateTime->format('Y-m-d'); // 日付の取得
        //$time = $dateTime->format('H:i:s'); // 時間の取得






        //$day = $res->where("id", "=", 'reservations.shop_id')->get();

        //$date = $day->start_at;


        // $time = $request->time->where("id", "=", $shop_id)->get();
        //$shops = Shops::all()->where("id", "=", $keyword)->first();

        //$formattedDateTime = $now->format('Y-m-d H:i:s');
        //$formattedDate = $now->format('Y-m-d');
        //$formattedTime = $now->format('H:i:s');

        //$day = $Date->format('Y-m-d');
        //$time = $Date->format('H:i');


        return view('mypage', compact('reserv', 'fav', 'shops', 'user'));
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


    public function res(Request $request)
    {

        $shop_id = $request->shoID;
        //$day = $request->day;
        //$time1 = $request->time;
        $num = $request->num;
        //$num = $request->num;

        $shops = Shops::all()->where("id", "=", $shop_id)->first();



        //$shops = Shops::all();
        $user = Auth::id();
        $day = $request->day;
        $time = $request->time;
        //$num = $request->num;
        //$fav = Favorites::all();


        //]);


        //$user = Auth::id();
        //$fav = Favorites::all();

        $user_id = Auth::id();

        $date = $day; // 日付
        // 時間

        $resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time));

        $shopId = $request->shoID;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        //$time = $request->shoID3;
        //$num = $request->shoID4;

        //$shopId = $request->shoID;

        //$day = $request->day;


        //$shopId = $request->shoID;
//$name = $request->shoID1;
//$day = $request->shoID2;
//$time = $request->shoID3;
//$num = $request->shoID4;



        //shoID
        //$time = $request->time;

        //$shops = Shops::all();
        $shops = Shops::all()->where("id", "=", $shopId)->first();


        //$fav = Favorites::all();


        //$num = $request->num;



        //$shops = Shops::all();

        //$fav = Favorites::all();

        //$test = compact('day', 'time', 'num', 'shops', 'fav', 'shopId');
        //session($test);


        $a = 1;

        //return view('mypage', compact('day', 'time', 'num', 'shops', 'fav', 'shopId'));
        return view('description', compact('day', 'time', 'num', 'shops', 'shopId', 'a', 'resTime'));
        //return view('description', compact('day', 'time', 'num', 'shops', 'fav', 'shopId'), redirect('day', 'time', 'num', 'shops', 'fav', 'shopId'));
        //return redirect('day', 'time', 'num', 'shops', 'fav', 'shopId');
    }



    public function reservation(Request $request)
    {
        $shop_id = $request->shoID;
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;

        $shops = Shops::all()->where("id", "=", $shop_id)->first();
        $fav = Favorites::all();


        //$shops = Shops::all();
        //$user = Auth::id();
        $day = $request->day;
        $time = $request->time;
        $num = $request->num;
        $fav = Favorites::all();


        //]);


        //$user = Auth::id();
        $fav = Favorites::all();

        $user_id = Auth::id();

        $date = $day; // 日付
        $time1 = $time;   // 時間

        $resTime = date('Y-m-d H:i:s', (int) strtotime($date . $time1));


        //$dateWithTime = Carbon::create($day, $time);

        // 日付と時間を結合してCarbonオブジェクトを作成
        //$combinedDateTime = Carbon::createFromFormat('Y-m-d H:i', $date . ' ' . $time1);

        // 任意の形式にフォーマットする場合
        //$formattedDateTime = $combinedDateTime->format('Y-m-d H:i');

        // 必要に応じてデータベースに保存するなどの処理を行います


        Favorites::create([
            "user_id" => $user_id,
            "shops_id" => $shop_id,
            "start_at" => $resTime,
            "member_num" => $num,
            "created_at" => now(),
            "updated_at" => now(),

        ]);



        //return view('test', compact('day', 'time', 'num', 'shops', 'fav', 'shopId', 'shopID'));
        //return view('reservation', compact('resTime'));
        return view('description', compact('day', 'time', 'num', 'shops', 'fav'));


    }



    public function test(Request $request)
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


        $rid = $request->shoID1;


        $a = 1;



        //return view('test', compact('day', 'time', 'num', 'shops', 'fav', 'shopId', 'shopID'));
        //return view('reservation', compact('resTime'));
        return view('test', compact('a', 'rid'));
        //return view('test', compact('resTime'));



    }


    public function done(Request $request)
    {

        //<input type="hidden" type="text" name="shoID1" value="{{$shops->user_id}}">
        //        <input type="hidden" type="text" name="shoID2" value="{{$shops->id}}">
        //       <input type="hidden" type="text" name="shoID3" value="{{$resTime}}">
        //       <input type="hidden" type="text" name="shoID4" value="{{$num}}">

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

        //<input type="hidden" type="text" name="shoID1" value="{{$shops->user_id}}">
        //        <input type="hidden" type="text" name="shoID2" value="{{$shops->id}}">
        //       <input type="hidden" type="text" name="shoID3" value="{{$resTime}}">
        //       <input type="hidden" type="text" name="shoID4" value="{{$num}}">

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






        //////////////////////////////////////

        $shops = Shops::all();


        //$fav = Favorites::all();
        //$reserv = Reservations::all();

        //$fav = Favorites::where('id', 'active')->get();
        //$fav = Favorites::leftJoin('shops', 'shops.id', '=', 'favorites.shops_id')->get();
        //$reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $res = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $ress = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();




        //$keyword = $request->shoID1;
        //$key = $keyword;




        //$key = $keyword;


        $del = Reservations::all()->where("shop_id", "=", $rid)->first()->delete();

        $reserv = Reservations::leftJoin('shops', 'shops.id', '=', 'reservations.shop_id')->get();

        $fav = Favorites::leftJoin('shops', 'shops.id', '=', 'favorites.shops_id')->get();

        $user_id = Auth::id();

        $user = User::all()->where("id", "=", $user_id)->first();




        return view('mypage', compact('reserv', 'fav', 'shops', 'user'));
        //return redirect('index2', compact('keyword', 'key'));
    }

}

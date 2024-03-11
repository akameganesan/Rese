<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;
use Illuminate\Support\Facades\Auth;










class FavoriteController extends Controller
{
    //
    public function favorite(Request $request)
    {

        $fa = $request->user_id;
        $fa = $request->shop_id;
        $Item = Favorites::insert([
            'user_id' => 'user_id',
            'shops_id' => 'shops_id'
        ]);

        //$fav = Favorites::all();


        return view('index', compact('Item'));




    }

    public function create(Request $request)
    {

        $sh = $request->shID;
        $sh2 = $request->shID1;

        if (empty($sh)) {
            $sh = 11111111111111;
        } else {
            $sh = $request->shID;
            $sh2 = $request->shID1;
        }

        // 現在ログインしているユーザー情報の取得
        //$user = Auth::user();

        // 現在ログインしているユーザーのID取得
        $user_id = Auth::id();





        return view('mypage', compact('sh', 'sh2', 'user_id')); //,'sh'));
    }

    public function create2(Request $request)
    {

        $auths = Auth::user();
        $user = Auth::id();
        $form = $request->all();
        Favorites::create($form);
        return view('mypage', compact('form', 'user'));

    }

    public function index()
    {
        $fa = Favorites::all();
        return view('index', ['fa' => $fa]);
    }

    public function create3(Request $request)
    {

        $shopId = $request->shID1;
        $form = $request->all();
        //Favorites::create($form);
        //$user = Auth::id();
        $user_id = Auth::id();

        Favorites::create([
            "user_id" => $user_id,
            "shops_id" => $shopId,
            "created_at" => now(),
            "updated_at" => now(),

        ]);

        //$shops = Shops::all();
        //$user = Auth::id();
        $fav = Favorites::all();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id')
            ->get();


        return view('index', compact('shops', 'fav'));

    }


    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Favorites::find($request->id);
        return view('index', ['author' => $author]);
    }

    // 削除機能
    public function remove(Request $request)
    {


        $keyword = $request->shID1;
        $key = $keyword;

        //$del = Favorites::all()->where("shops_id", "=", $key)->delete();
        $del = Favorites::all()->where("shops_id", "=", $key)->first()->delete();

        $fav = Favorites::all();
        //$shops = Shops::all();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id')
            ->get();

        return view('index', compact('shops', 'fav'));

    }
}

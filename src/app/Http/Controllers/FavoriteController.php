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
    public function create(Request $request)
    {
        $shopId = $request->shID1;
        $form = $request->all();
        $user_id = Auth::id();
        Favorites::create([
            "user_id" => $user_id,
            "shops_id" => $shopId,
            "created_at" => now(),
            "updated_at" => now(),

        ]);
        $fav = Favorites::all();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id', 'favorites.user_id')
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
        $del = Favorites::all()->where("shops_id", "=", $key)->first()->delete();
        $fav = Favorites::all();
        $shops = Shops::leftJoin('favorites', 'shops.id', '=', 'favorites.shops_id')
            ->select('shops.*', 'favorites.shops_id', 'favorites.user_id')
            ->get();
        return view('index', compact('shops', 'fav'));
    }
}

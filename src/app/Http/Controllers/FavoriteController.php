<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Areas;
use App\Models\Favorites;
use App\Models\Genres;
use App\Models\Reservations;
use App\Models\User;

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
        //$form = $request->all();
        //return redirect('/');

        $form = $request->all();
        Favorites::create($form);
        return redirect('/');
    }
}

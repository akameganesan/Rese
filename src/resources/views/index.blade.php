@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')




<div class="background">

    <div class="container">
        <div class="flex__item blog-wrap">
            @foreach($shops as $shop)
            <a class="blog-wrap__item" href="">
                <div class="register__shadow2">
                   <img src="{{$shop->img_url}}" alt="" class="blog-wrap__item-eyecatch">
                </div>
                <div class="register__shadow">
                    <div class="blog-wrap__item-content">
                        <h3 class="blog-wrap__item-content-ttl">{{$shop->name}}</td>
                        </h3>
                        <ul class="flex__item2">
                            @if($shop->area_id == 1)
                            <li class="blog-wrap__item-content-tag">#東京</li>
                            @elseif($shop->area_id == 2)
                            <li class="blog-wrap__item-content-tag">#大阪府</li>
                            @elseif($shop->area_id == 3)
                            <li class="blog-wrap__item-content-tag">#福岡県</li>
                            @endif

                            @if($shop->genre_id == 1)
                            <li class="blog-wrap__item-content-tag2">#寿司</li>
                            @elseif($shop->genre_id == 2)
                            <li class="blog-wrap__item-content-tag2">#焼肉</li>
                            @elseif($shop->genre_id == 3)
                            <li class="blog-wrap__item-content-tag2">#ラーメン</li>
                            @elseif($shop->genre_id == 4)
                            <li class="blog-wrap__item-content-tag2">#イタリアン</li>
                            @elseif($shop->genre_id == 5)
                            <li class="blog-wrap__item-content-tag2">#居酒屋</li>
                            @endif
                        </ul>
                        <form action="/detail" type="text" name="shoID" method="post">
                            @csrf
                            <div class="flex__item2">
                                <input type="hidden" name="shoID" value="{{$shop->id}}" size="10">
                                <div class="form__button">
                                    <button class="form__button-submit" type="submit">詳しく見る</button>
                                </div>
                            </div>
                        </form>
                        


                        @if(Auth::check())
                            @if(empty($shop->shops_id))
                                <form action="/create3" type="text" name="shID1" method="post">
                                    @csrf
                                        <input type="hidden" name="shID1" value="{{$shop->id}}" size="10">
                                            <div class="heart1__margin">
                                              <button class="heart1" type="submit"></button>
                                            </div>
                                </form>
                            @else
                                <form action="/remove" type="text" name="shID1" method="post">
                                    @csrf
                                    <input type="hidden" name="shID1" value="{{$shop->id}}" size="10">
                                        <div class="heart1__margin">
                                            <button class="heart" type="submit"></button>
                                        </div>
 
                                                                <!--</div>-->
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>




@endsection
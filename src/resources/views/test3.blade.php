@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection


@section('content')
<!--詳細ページ建設予定地-->

<!--img class="size__icon" src="{{ asset('img/時計の無料アイコン (1).svg') }}" alt=""-->
<!--<img class="size__icon" src="{{ asset('img/時計の無料アイコン (1).svg') }}" alt="">-->

<!--
<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/時計無料アイコン.svg') }}" alt="">
    </div>
</div>

<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/カギアイコン.svg') }}" alt="">
    </div>
</div>


<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/ハートのマーク グレー.svg') }}" alt="">
    </div>
</div>


<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/検索用の虫眼鏡アイコン素材1採用.svg') }}" alt="">
    </div>
</div>


<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/ハートのマークピンク.svg') }}" alt="">
    </div>
</div>

<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/太いバツのアイコン.svg') }}" alt="">
    </div>
</div>

<div class="icon__flex">
    <div class="icon__left">
        <img class="icon_1" src="{{ asset('img/人物アイコン.svg') }}" alt="">
    </div>
</div>
-->




<div class="new_container1">
    <div class="title__res2">予約状況</div>
        <div class="text__move1">{{$user->name}}さん</div>
            <div class="text__move">お気に入り店舗</div>
            @php
$ab = 0;
            @endphp
            <div class="container__color">
                <div class="flex__item4">
                    <div class="background">
                        <div class="container">
                            <div class="flex__item4">
                                <div class="container1">
                                    @foreach($reserv as $re)
                                        <div class="confirm">
                                            <div class="box__move">
                                                <div class="box">
                                                    <div class="icon__flex">
                                                        <div class="icon__left">
                                                            <img class="size__icon" src="{{ asset('img/時計の無料アイコン (1).svg') }}"
                                                    alt="">
                                                        </div>
                                                    </div>
                                                    @php
    $ab += 1;
    //echo $ab;
                                                    @endphp
                                                    <div class="title__res3">予約{{$ab}}
                                                    </div>
                                                    <form action="/delete" type="text" name="shoID" method="post">
                                                        @csrf
                                                        <div class="flex__item2">
                                                            <input type="hidden" name="shoID1" value="{{$re->shop_id}}" size="10">
                                                            <div class="form__button">
                                                                <button class="form__button-submit5" type="submit"><img
                                                            class="size__icon" src="{{ asset('img/太いバツのアイコン2.svg') }}"
                                                            alt=""></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    @if(empty($re->name))
                                                     @else
                                                        <h2>Shop　　　　{{$re->name}}</h2>
                                                    @endif
                                                    @if(empty($re->start_at))
                                                            <h2>Date </h2>
                                                    @else
                                                    @php
        $date = \Carbon\Carbon::create($re->start_at);
        $formattedDate = $date->format('Y-m-d');
        $formattedTime = $date->format('H:i');
                                                    @endphp
                                                        <h2>Date　　　　{{$formattedDate}}</h2>
                                                    @endif
                                                    @if(empty($re->start_at))
                                                        <h2>Time </h2>
                                                    @else
                                                        <h2>Time　　　　{{$formattedTime}}</h2>
                                                    @endif
                                                    @if(empty($re->member_num))
                                                        <h2>Number </h2>
                                                    @else
                                                        <h2>Number　　　　{{$re->member_num}}</h2>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>    
                                    @endforeach                    
                                    <div class="container2">
                                        <div class="card__margin">
                                            <div class="flex__item blog-wrap">
                                                <div class="saizensen">
                                                    <div class="display_flex">
                                                        <div class="display_flex">
                                                            @foreach($shops as $fa)
                                                                <div class="card__margin1">
                                                                 @php
    $s = $fa->id;
    $p = $fa->shops_id;
                                                                @endphp
                                                                @if($fa->id == $fa->shops_id)
                                                                    <a class="blog-wrap__item" href="">
                                                                        <div class="register__shadow2">
                                                                            <img src="{{$fa->img_url}}" alt=""
                                                                class="blog-wrap__item-eyecatch">
                                                                </div>
                                                                <div class="register__shadow">
                                                                    <div class="blog-wrap__item-content">
                                                                        <h3 class="blog-wrap__item-content-ttl">
                                                                            {{$fa->name}}
                                                                    </td>
                                                                </h3>
                                                                <ul class="flex__item2">
                                                                    @if($fa->area_id == 1)
                                                                    <li class="blog-wrap__item-content-tag">
                                                                        #東京
                                                                    </li>
                                                                    @elseif($fa->area_id == 2)
                                                                    <li class="blog-wrap__item-content-tag">
                                                                        #大阪府
                                                                    </li>
                                                                    @elseif($fa->area_id == 3)
                                                                    <li class="blog-wrap__item-content-tag">
                                                                        #福岡県
                                                                    </li>
                                                                    @endif
                                                                    @if($fa->genre_id == 1)
                                                                    <li class="blog-wrap__item-content-tag2">
                                                                        #寿司
                                                                    </li>
                                                                    @elseif($fa->genre_id == 2)
                                                                    <li class="blog-wrap__item-content-tag2">
                                                                        #焼肉
                                                                    </li>
                                                                    @elseif($fa->genre_id == 3)
                                                                    <li class="blog-wrap__item-content-tag2">
                                                                        #ラーメン
                                                                    </li>
                                                                    @elseif($fa->genre_id == 4)
                                                                    <li class="blog-wrap__item-content-tag2">
                                                                        #イタリアン
                                                                    </li>
                                                                    @elseif($fa->genre_id == 5)
                                                                    <li class="blog-wrap__item-content-tag2">
                                                                        #居酒屋
                                                                    </li>
                                                                    @endif
                                                                </ul>

                                                                <form action="/detail" type="text" name="shoID"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="flex__item2">
                                                                        <input type="hidden" name="shoID"
                                                                            value="{{$fa->id}}" size="10">
                                                                        <div class="form__button1">
                                                                            <button class="form__button-submit"
                                                                                type="submit">詳しく見る</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                @endif                                                                
                                                                @if (Auth::check())
                                                                @if(empty($fa->shops_id))
                                                                <form action="/create3" type="text" name="shoID"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="shID1"
                                                                        value="{{$fa->shopd_id}}" size="10">
                                                                    <div class="heart__margin">
                                                                        <!--<div class="button_none">
                                                                            <button class="heart1"
                                                                                type="submit"></button>
                                                                        </div>-->
                                                                         <img src="img/ハートのマーク グレー.svg" alt="" class="blog-wrap__item-eyecatch" type="button">
                                                                    </div>
                                                                </form>
                                                                @else
                                                                <form action="/remove" type="text" name="shoID"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="shoID"
                                                                        value="{{$fa->shops_id}}" size="10">
                                                                    <div class="heart__margin">
                                                                       <!-- <div class="button_none">
                                                                            <button class="heart"
                                                                                type="submit"></button>
                                                                        </div>-->
                                                                         <img src="img/ハートのマークピンク.svg" alt="" class="blog-wrap__item-eyecatch" type="button">
                                                                    </div>
                                                                </form>
                                                                @endif
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
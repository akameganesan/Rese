@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection


@section('content')



<div class="background">
    <div class="container">
<div class="text__move1">{{$user->name}}さん</div>
    <div class="title__res2">予約状況　　　　　　　　　　　　　　　　　　　　　　　　お気に入り店舗</div>
        
            <!--<div class="text__move">お気に入り店舗</div>-->
            @php
$ab = 0;
            @endphp


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
                                                    <form class="form__left" action="/delete" type="text" name="shoID" method="post">
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
 
                                            </div>
                                            </div>
                                            </div>
                                            </div>






<div class="container__move7">
    <div class="container7">
        <div class="flex__item blog-wrap">
            @foreach($shops as $shop)
            @if(empty($shop->shops_id))
                    @else                        
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
            @endif
            @endforeach
        </div>
    </div>
</div>
</div>


@endsection
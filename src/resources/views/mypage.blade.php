@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection


@section('content')
<!--詳細ページ建設予定地-->
<div class="flex__item4">
    <div class="background">
        <div class="container">
            <div class="flex__item4">
                <div class="container1">
                    <div class="title__res">予約状況</div>



                    @foreach($reserv as $re)
                    @php
                    //$Date = $re->start_at;
                    //$day = $Date->format('Y-m-d');
                    //$time = $Date->format('H:i');
                    @endphp

                    <div class="box">

                        <div class="confirm">
                            <div class="box">
                                <div class="title__res">予約状況</div>

                                @if(empty($re->name))
                                @else
                                <h2>Shop {{$re->name}}</h2>
                                @endif

                                @if(empty($re->start_at))
                                <h2>Date </h2>
                                @else

                                <h2>Date {{$re->start_at}}</h2>
                                @endif
                                @if(empty($re->start_at))
                                <h2>Time </h2>
                                @else
                                <h2>Time {{$re->start_at}}</h2>
                                @endif
                                @if(empty($re->member_num))
                                <h2>Number </h2>
                                @else
                                <h2>Number {{$re->member_num}}</h2>
                                @endif
                            </div>

                        </div>
                    </div>
                    @endforeach



                </div>


                <div class="container2">
                    <div class="card__margin">
                        <div class="flex__item blog-wrap">

                            @foreach($fav as $fa)
                            @php
                            $s = $fa->id;
                            $p = $fa->shops_id;
                            @endphp
                            @if($fa->id == $fa->shops_id)
                            <a class="blog-wrap__item" href="">
                                <div class="register__shadow2">
                                    <img src="{{$fa->img_url}}" alt="" class="blog-wrap__item-eyecatch">
                                </div>
                                <div class="register__shadow">
                                    <div class="blog-wrap__item-content">
                                        <h3 class="blog-wrap__item-content-ttl">{{$fa->name}}</td>
                                        </h3>
                                        <ul class="flex__item2">
                                            @if($fa->area_id == 1)
                                            <li class="blog-wrap__item-content-tag">#東京</li>
                                            @elseif($fa->area_id == 2)
                                            <li class="blog-wrap__item-content-tag">#大阪府</li>
                                            @elseif($fa->area_id == 3)
                                            <li class="blog-wrap__item-content-tag">#福岡県</li>
                                            @endif

                                            @if($fa->genre_id == 1)
                                            <li class="blog-wrap__item-content-tag2">#寿司</li>
                                            @elseif($fa->genre_id == 2)
                                            <li class="blog-wrap__item-content-tag2">#焼肉</li>
                                            @elseif($fa->genre_id == 3)
                                            <li class="blog-wrap__item-content-tag2">#ラーメン</li>
                                            @elseif($fa->genre_id == 4)
                                            <li class="blog-wrap__item-content-tag2">#イタリアン</li>
                                            @elseif($fa->genre_id == 5)
                                            <li class="blog-wrap__item-content-tag2">#居酒屋</li>
                                            @endif
                                        </ul>

                                        <form action="/detail" type="text" name="shoID" method="post">
                                            @csrf
                                            <div class="flex__item2">
                                                <input type="hidden" name="shoID" value="{{$fa->id}}" size="10">
                                                <div class="form__button">
                                                    <button class="form__button-submit" type="submit">詳しく見る</button>
                                                </div>
                                            </div>
                                        </form>

                                        @if (Auth::check())

                                        <form action="/create3" type="text" name="shoID" method="post">
                                            @csrf
                                            <input type="hidden" name="shID1" value="{{$fa->id}}" size="10">
                                            <div class="heart__margin">
                                                <div class="button_none">
                                                    <button class="heart1" type="submit"></button>
                                                </div>
                                            </div>
                                        </form>

                                        @foreach($shops as $shop)

                                        @if($s == $p)
                                        <form action="/remove" type="text" name="shoID" method="post">
                                            @csrf
                                            <input type="hidden" name="shID1" value="{{$shop->id}}" size="10">
                                            <div class="heart__margin">
                                                <div class="button_none">
                                                    <button class="heart" type="submit"></button>
                                                </div>
                                            </div>
                                        </form>
                                        @else
                                        @endif
                                        @endforeach
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
        </div>


        @endsection
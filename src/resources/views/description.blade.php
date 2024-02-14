@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/description.css') }}">
@endsection

@section('content')
<!--詳細ページ建設予定地-->

<div class="flex__item4">

    <div class="container1">



        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="contact__btn2">X</a>
                <a class="header__logo" href="/">


                    {{$shops->name}}

                </a>

                @if (Auth::check())

                @endif
                </ul>
                </nav>
            </div>
        </div>
        <div class="img__size1">
            <!--<img src="{{$shops->img_url}}" alt="" class="blog-wrap__item-eyecatch">-->
            <img src="{{$shops->img_url}}" alt="">
        </div>

        <ul class="flex__item3">
            @if($shops->area_id == 1)
            <li class="blog-wrap__item-content-tag">#東京</li>
            @elseif($shops->area_id == 2)
            <li class="blog-wrap__item-content-tag">#大阪府</li>
            @elseif($shops->area_id == 3)
            <li class="blog-wrap__item-content-tag">#福岡県</li>
            @endif

            @if($shops->genre_id == 1)
            <li class="blog-wrap__item-content-tag2">#寿司</li>
            @elseif($shops->genre_id == 2)
            <li class="blog-wrap__item-content-tag2">#焼肉</li>
            @elseif($shops->genre_id == 3)
            <li class="blog-wrap__item-content-tag2">#ラーメン</li>
            @elseif($shops->genre_id == 4)
            <li class="blog-wrap__item-content-tag2">#イタリアン</li>
            @elseif($shops->genre_id == 5)
            <li class="blog-wrap__item-content-tag2">#居酒屋</li>
            @endif
        </ul>


        <p class="p_font-size1">{{$shops->description}}</p>

    </div>


    <div class="container2">
        <div class="box">
            <div class="title__res">予約</div>
            <form method='post' action='res'>
                @csrf
                <div class="day__size2">
                    <input type="date" name="day">
                </div>

                <div class="day__size1">
                    <input type="time" name="time">
                </div>

                <div class="day__size1">
                    <select name='num'>
                        <option value='1'>１人</option>
                        <option value='2'>２人</option>
                        <option value='3'>３人</option>
                        <option value='4'>４人</option>
                        <option value='5'>５人</option>
                        <option value='6'>６人</option>
                        <option value='7'>７人</option>
                        <option value='8'>８人</option>
                        <option value='9'>９人</option>
                        <option value='10'>１０人</option>
                    </select>
                </div>
                <div class="day__size3">
                    <input type="hidden" type="text" name="shoID" value="{{$shops->id}}">
                </div>
                <div class="button_xy">
                    <button type="submit">送信</button>
                </div>

            </form>
        </div>


        <div class="box2">
            <div class="confirm">
                @if(empty($shops->name))
                @else
                <h2>Shop {{$shops->name}}</h2>
                @endif
                @if(empty($day))
                <h2>Date </h2>
                @else
                <h2>Date {{$day}}</h2>
                @endif
                @if(empty($time))
                <h2>Time </h2>
                @else
                <h2>Time {{$time}}</h2>
                @endif
                @if(empty($num))
                <h2>Number </h2>
                @else
                <h2>Number {{$num}}</h2>
                @endif

            </div>
        </div>
        <div class="box1">

        </div>

    </div>






</div>



@endsection
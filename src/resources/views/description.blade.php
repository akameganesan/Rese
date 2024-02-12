@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/description.css') }}">
@endsection

@section('content')
<!--詳細ページ建設予定地-->

<div class="flex__item4">

    <div class="container1">

        {{$keyword}}

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

        <!--<div class="flex">
    <div class="box">①</div>
    <div class="box">②</div>
    <div class="box">③</div>
</div>-->

        <p class="p_font-size1">{{$shops->description}}</p>




        <h1>{{$shops->name}}</h1>

    </div>


    <div class="container2">
        <div class="box">
            <div class="title__res">予約</div>
            <div class="day__size">
                <input type="date" name="birthday">
            </div>
            <div class="day__size">
                <input type="time" name="birthday">
            </div>
            <div class="day__size">
                <form method='POST' action='/test'>
                    <select name='age'>
                        <option value='1'>１人</option>
                        <option value='2'>２人</option>
                        <option value='3'>３人</option>
                    </select>
                    <!--<input type='submit' value='送信' />-->
                </form>
            </div>
        </div>
        <div class="box1">
        </div>

    </div>

</div>

@endsection
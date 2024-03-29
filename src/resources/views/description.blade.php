@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/description.css') }}">
@endsection

@section('content')

<div class="flex__item4">
    <div class="container1">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="contact__btn2"><</a>
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
            <div class="title__res5">予約</div>
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
                    <button class="contact__btn6" type="submit">内容確認</button>
                </div>
            </form>
        </div>
        <div class="box2">
            <div class="confirm1">
                <div class="h__size_w">
                <div class="h__size">
                    @if(empty($shops->name))
                    @else
                
                    <div class="h__size_s">
                    <h2>Shop　　{{$shops->name}}</h2>
                    </div>
                    @endif
                    @if(empty($day))
                    <div class="h__size_s">
                    <h2>Date </h2>
                    </div>
                    @else
                    <div class="h__size_s">
                    <h2>Date　　{{$day}}</h2>
                    </div>
                    @endif
                    @if(empty($time))
                    <div class="h__size_s">
                    <h2>Time </h2>
                    </div>
                    @else
                    <div class="h__size_s">
                    <h2>Time　　{{$time}}</h2>
                    </div>
                    @endif
                    @if(empty($num))
                    <div class="h__size_s">
                    <h2>Number </h2>
                    </div>
                    @else
                    <div class="h__size_s">
                    <h2>Number　　{{$num}}</h2>
                    </div>
                    @endif
                </div>
</div>
            </div>
        </div>
        <div class="box1">
            @if(empty($a))
            @else
            @if($a == 1)
            <form method='post' action='done'>
                @csrf
                <input type="hidden" type="text" name="shoID1" value="{{$shops->user_id}}">
                <input type="hidden" type="text" name="shoID2" value="{{$shops->id}}">
                <input type="hidden" type="text" name="shoID3" value="{{$resTime}}">
                <input type="hidden" type="text" name="shoID4" value="{{$num}}">
                <div class="button_xy1">
                    <div class="button_xy">
                        <button class="contact__btn7" type="submit">予約する</button>
                    </div>
                </div>
            </form>
            @endif
            @endif
        </div>
    </div>
</div>
@endsection
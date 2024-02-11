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
                        <div class="flex__item2">
                            <div class="form__button">
                                <button class="form__button-submit" type="submit">詳しく見る</button>
                            </div>
                        </div>



                        @if (Auth::check())





                        <form action="/create3" type="text" name="shoID" method="post">
                            @csrf

                            <input type="hidden" name="shID1" value="{{$shop->id}}" size="10">
                            <div class="heart__margin">

                                <div class="button_none">
                                    <button class="heart1" type="submit"></button>
                                </div>

                            </div>

                        </form>





                        @foreach($fav as $fa)

                        @if($fa->shops_id == $shop->id)


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

            @endforeach

        </div>
    </div>
</div>









<!--ここから下は形だけ-->


<!--           <a class=" blog-wrap__item" href="">
                                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg"
                                    alt="" class="blog-wrap__item-eyecatch">
                                <span class="blog-wrap__item-cat">Blog</span>

                                <div class="blog-wrap__item-content">
                                    <h3 class="blog-wrap__item-content-ttl">牛助</h3>
                                    <ul class="flex__item">
                                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                                    </ul>
                                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">戦慄</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">ルーク</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">志摩屋</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">香</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">JJ</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">らーめん極み</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">鳥雨</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">築地色合</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">晴海</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">三子</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">八戒</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">福助</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">ラー北</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">翔</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">経緯</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">漆</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">THE TOOL</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>

            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1amazonaws.com/image/sushi.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
                <span class="blog-wrap__item-cat">Blog</span>

                <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">木船</h3>
                    <ul class="flex__item">
                        <li class="blog-wrap__item-content-tag">2021/01/01</li>
                        <li class="blog-wrap__item-content-tag">#COACHTECH</li>
                    </ul>
                </div>
            </a>
            
        </div>
        <a href="" class="blog__link">一覧ページへ</a>
    </ div>
</div>-->
<form action="/logout" method="post">
    @csrf
    <li class="li__li"><a class="a__under" href="/logout">ログアウト</a></li>
    <div>
        <button>ログアウト</button>
</form>


@endsection
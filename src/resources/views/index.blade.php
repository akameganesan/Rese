@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="background">

    <div class="container">
        <div class="flex__item blog-wrap">

            <!--<div class="register__shadow">-->


            <a class="blog-wrap__item" href="">
                <div class="register__shadow2">
                    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                        class="blog-wrap__item-eyecatch">
                    <!--<span class="blog-wrap__item-cat">Blog</span>-->
                </div>

                <div class="register__shadow">
                    <div class="blog-wrap__item-content">
                        <h3 class="blog-wrap__item-content-ttl">仙人</h3>
                        <ul class="flex__item2">
                            <li class="blog-wrap__item-content-tag">#東京都</li>
                            <li class="blog-wrap__item-content-tag">#寿司</li>
                        </ul>
                    </div>
                </div>

            </a>
            <!--</div>-->


            <!--ここから下は形だけ-->


            <a class="blog-wrap__item" href="">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt=""
                    class="blog-wrap__item-eyecatch">
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
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
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
    </div>
</div>


@endsection


















<!--<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/menu" class="contact__btn"><span class="example1">━</span><span class="example2">━</span><span
                        class="example3">━</span></a>
                <form class="form" action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button">ログアウト</button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <form class="form" action="/logout" method="post">
            @csrf
            <button class="header-nav__button">ログアウト</button>
        </form>
    </main>
</body>

</html>-->
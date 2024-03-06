<!DOCTYPE html>
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
                <a class="header__logo" href="/menu">
                    Rese
                </a>
                <nav>
                    <ul class="header-nav">
                        <div class="header__z-index">
                            <div class="flex__item_3">
                                <div class="gnavi__wrap">
                                    <div class="register__shadow">
                                        <ul class="gnavi__lists">
                                            <div calss="pulldown__shadow">
                                                <li class="gnavi__list">
                                                    <a href="#">All areas</a>
                                                    <ul class="dropdown__lists">
                                                        <!--<li class="dropdown__list"><a href="#" value="1">東京都</a>-->
                                                        
                                                            
                                                            <li>  <a class="a_size" href="/">All areas</a>
                                                            </li>
                                                        
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                             @if(empty($key))
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="1"><button class="contact__btn5"
                                                                    type="submit">東京</button>
                                                            </li>
                                                            @else
                                                            <input type="hidden" name="genre" value="{{$key}}" size="10">
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="1"><button class="contact__btn5"
                                                                    type="submit">東京</button>
                                                            </li>
                                                            @endif
                                                        </form>
                                                        <!--<li class="dropdown__list"><a href="#" value="2">大阪府</a>-->
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                             @if(empty($key))
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="2"><button class="contact__btn5"
                                                                    type="submit">大阪</button>
                                                            </li>
                                                             @else
                                                             <input type="hidden" name="genre" value="{{$key}}" size="10">
                                                             <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="2"><button class="contact__btn5"
                                                                    type="submit">大阪</button>
                                                            </li>
                                                            @endif
                                                        </form>
                                                        <!--<li class="dropdown__list"><a href="#" value="3">福岡県</a>-->
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                             @if(empty($key))
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="3"><button class="contact__btn5"
                                                                    type="submit">福岡</button>
                                                            </li>
                                                             @else
                                                             <input type="hidden" name="genre" value="{{$key}}" size="10">
                                                              <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="3"><button class="contact__btn5"
                                                                    type="submit">福岡</button>
                                                            </li>
                                                            @endif
                                                        </form>
                                                    </ul>

                                                </li>
                                            </div>

                                            <li class="gnavi__list">
                                                <a href="#">All genres</a>
                                                <ul class="dropdown__lists">
                                                    <!--<li class="dropdown__list"><a href="#" value="1">東京都</a>-->
                                                    <li>  <a class="a_size" href="/">All genres</a>
                                                    </li>
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                            @if(empty($keyword))
                                                            <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="1"><button class="contact__btn5"
                                                                type="submit">寿司</button>
                                                                </li>
                                                            @else
                                                                <input type="hidden" name="area" value="{{$keyword}}" size="10">
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="1"><button class="contact__btn5"
                                                                type="submit">寿司</button>
                                                                </li>
                                                                @endif
                                                            </form>
                                                         <!--<li class="dropdown__list"><a href="#" value="2">大阪府</a>-->
                                                    <form action="genre" type="number" name="genre" method="post">
                                                         @csrf
                                                            @if(empty($keyword))
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                    value="2"><button class="contact__btn5"
                                                                    type="submit">焼肉</button>
                                                                </li>
                                                            @else
                                                                <input type="hidden" name="area" value="{{$keyword}}" size="10">
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                    value="2"><button class="contact__btn5"
                                                                    type="submit">焼肉</button>
                                                                </li>
                                                            @endif    
                                                    </form>
                                                            <!--<li class="dropdown__list"><a href="#" value="3">福岡県</a>-->
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                            @if(empty($keyword))
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="3"><button class="contact__btn5"
                                                                type="submit">ラーメン</button>
                                                                </li>
                                                            @else
                                                                <input type="hidden" name="area" value="{{$keyword}}" size="10">
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="3"><button class="contact__btn5"
                                                                type="submit">ラーメン</button>
                                                                </li>
                                                            @endif
                                                    </form>
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                            @if(empty($keyword))
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                    value="4"><button class="contact__btn5"
                                                                        type="submit">イタリアン</button>
                                                                </li>
                                                            @else
                                                                <input type="hidden" name="area" value="{{$keyword}}" size="10">
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                    value="4"><button class="contact__btn5"
                                                                        type="submit">イタリアン</button>
                                                                </li>
                                                            @endif
                                                    </form>
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                            @if(empty($keyword))
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="5"><button class="contact__btn5"
                                                                type="submit">居酒屋</button>
                                                                </li>
                                                            @else
                                                                <input type="hidden" name="area" value="{{$keyword}}" size="10">
                                                                <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="5"><button class="contact__btn5"
                                                                type="submit">居酒屋</button>
                                                                </li>
                                                            @endif
                                                    </form>
                                                </ul>                                            
                                            </li>
                                            <li class="gnavi__list">
                                                <form class="form" type="text" name="search" action="search"
                                                    method="post">
                                                    @csrf
                                                    <div class="search_box">
                                                        <input type="text" name="search" placeholder="Search...">
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <!-- 以下省略 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>

    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
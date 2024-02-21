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
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="1"><button type="submit">東京</button>
                                                            </li>
                                                        </form>
                                                        <!--<li class="dropdown__list"><a href="#" value="2">大阪府</a>-->
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="2"><button type="submit">大阪</button>
                                                            </li>
                                                        </form>
                                                        <!--<li class="dropdown__list"><a href="#" value="3">福岡県</a>-->
                                                        <form action="area" type="number" name="area" method="post">
                                                            @csrf
                                                            <li class="dropdown__list"><input name="area" type="hidden"
                                                                    value="3"><button type="submit">福岡</button>
                                                            </li>
                                                        </form>
                                                    </ul>

                                                </li>
                                            </div>

                                            <li class="gnavi__list">
                                                <a href="#">All genres</a>
                                                <ul class="dropdown__lists">
                                                    <!--<li class="dropdown__list"><a href="#" value="1">東京都</a>-->
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                        <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="1"><button type="submit">寿司</button>
                                                        </li>
                                                    </form>
                                                    <!--<li class="dropdown__list"><a href="#" value="2">大阪府</a>-->
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                        <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="2"><button type="submit">焼肉</button>
                                                        </li>
                                                    </form>
                                                    <!--<li class="dropdown__list"><a href="#" value="3">福岡県</a>-->
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                        <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="3"><button type="submit">ラーメン</button>
                                                        </li>
                                                    </form>
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                        <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="4"><button type="submit">イタリアン</button>
                                                        </li>
                                                    </form>
                                                    <form action="genre" type="number" name="genre" method="post">
                                                        @csrf
                                                        <li class="dropdown__list"><input name="genre" type="hidden"
                                                                value="5"><button type="submit">居酒屋</button>
                                                        </li>
                                                    </form>
                                                </ul>
                                                <!--<ul class="dropdown__lists">
                                                    <li class="dropdown__list"><a href="#">寿司</a></li>
                                                    <li class="dropdown__list"><a href="#">焼肉</a></li>
                                                    <li class="dropdown__list"><a href="#">ラーメン</a></li>
                                                    <li class="dropdown__list"><a href="#">イタリアン</a></li>
                                                    <li class="dropdown__list"><a href="#">居酒屋</a></li>
                                                </ul>-->
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
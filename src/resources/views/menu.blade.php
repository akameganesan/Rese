<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    @yield('css')
</head>

<body>
    <header class="header-2">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/" class="contact__btn3">x</a>
            </div>
        </div>
    </header>

    <main>
        @if (Auth::check())
        <div class="p__atsumi"></div>
        <a class="a__size3" href="/">HOME</a>
        <form class="a__size10" action="/logout" method="post">
            @csrf
            <!--<a class="a__size" href="/login">Logout</a>-->
            <button class="transparent-button" type="submit">Logout</button>
        </form>
        <div class="p__atsumi1"></div>
        <a class="a__size2" href="/mypage">Mypage</a>

        @else
        <div class="p__atsumi"></div>
        <a class="a__size3" href="/">HOME</a>
        <a class="a__size4" href="/register">Registration</a>
        <!--<div class="p__atsumi3"></div>-->
        <a class="a__size2" href="/login">Login</a>
        @endif
    </main>
</body>

</html>
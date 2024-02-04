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
                <a href="/menu" class="contact__btn"><span class="example1">━</span><span class="example2">━</span><span
                        class="example3">━</span></a>
            </div>
        </div>
    </header>

    <main>
        @if (Auth::check())
        <a href="/">HOME</a>
        <form class="form" action="/logout" method="post">
            @csrf
            <a href="/login">Logout</a>
        </form>
        <a href="/mypage">Mypage</a>
        @else
        <a href="/">HOME</a>
        <a href="/register">Registration</a>
        <a href="/login">Login</a>
        @endif
        <form action="/logout" method="post">
            @csrf
            <button>ログアウト</button>
        </form>

    </main>
</body>

</html>
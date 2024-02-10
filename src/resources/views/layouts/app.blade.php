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

                @if (Auth::check())

                @endif
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
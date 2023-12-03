<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="menu-content">
                <ul>
                    <li>
                        <a href="/shop_all">Home</a>
                    </li>
                    @if (Auth::check())
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="button">Logout</button>
                        </form>
                    </li>
                    <li>
                        <a href="/my_page">Mypage</a>
                    </li>
                    @else
                    <li>
                        <a href="/register">Registration</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <h2>Rese</h2>
    </header>
    
    <main>
        @yield('content')
    </main>
</body>

</html>
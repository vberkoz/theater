<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: sans-serif;
            margin: 5px;
        }
        .menu {
            column-count: 2;
        }
        ul.menu li { padding: 10px; }
        img { width: 100%; }
        a { text-decoration: none; }
        a:hover { text-decoration: underline; }
        a:visited { color: blue; }
        a.current { text-decoration: underline; }
        .container {
            margin: 0 auto;
            width: 310px;
        }
        .left, .right {
            display: inline-block;
            vertical-align: top;
            font-size: 14px;
            width: 145px;
        }
        .left { text-align: right; }
        .right { text-align: left; }
        .dash {
            display: inline-block;
            vertical-align: top;
            text-align: center;
            font-size: 14px;
            width: 10px;
        }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <p class="text-center">Chernivtsi Academic Regional Ukrainian Music and Drama Theater named after Olga Kobylianska</p>
            <ul class="menu">
                <li>
                    <a href="{{ url("/affiche") }}"
                       class="{{ url()->current() == url("/affiche") ? 'current' : ''}}">
                        Affiche
                    </a>
                </li>
                <li>
                    <a href="{{ url("/theater") }}"
                        class="{{ url()->current() == url("/theater") ? 'current' : ''}}">
                        Theater
                    </a>
                </li>
                <li>
                    <a href="{{ url("/workers/management") }}"
                        class="{{ (url()->current() == url("/workers/management") || url()->current() == url("/workers/artistic") || url()->current() == url("/workers/actors") || url()->current() == url("/workers/ballet") || url()->current() == url("/workers/orchestra")) ? 'current' : ''}}">
                        Workers
                    </a>
                </li>
                <li>
                    <a href="{{ url("/repertoire/general") }}"
                        class="{{ (url()->current() == url("/repertoire/general") || url()->current() == url("/repertoire/children")) ? 'current' : ''}}">
                        Repertoire
                    </a>
                </li>
                <li>
                    <a href="{{ url("/festival") }}"
                        class="{{ url()->current() == url("/festival") ? 'current' : ''}}">
                        Festival
                    </a>
                </li>
                <li>
                    <a href="{{ url("/studio") }}"
                        class="{{ url()->current() == url("/studio") ? 'current' : ''}}">
                        Studio
                    </a>
                </li>
                <li>
                    <a href="{{ url("/blog") }}"
                        class="{{ url()->current() == url("/blog") ? 'current' : ''}}">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ url("/Vacancies") }}"
                        class="{{ url()->current() == url("/Vacancies") ? 'current' : ''}}">
                        Vacancies
                    </a>
                </li>
                <li>
                    <a href="{{ url("/tickets") }}"
                        class="{{ url()->current() == url("/tickets") ? 'current' : ''}}">
                        Tickets
                    </a>
                </li>
                <li>
                    <a href="{{ url("/contact") }}"
                        class="{{ url()->current() == url("/contact") ? 'current' : ''}}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <section>@yield('content')</section>
    <footer>
        <div class="container">
            <p class="text-center">2019 © All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
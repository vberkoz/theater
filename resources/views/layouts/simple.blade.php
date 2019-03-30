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
        .pagination { text-align: center; }
        .pagination li {
            display: inline-block;
            padding: 10px;
        }
        form { padding: 5px; }
        input[type="email"], input[type="submit"], textarea {
            width: 280px;
            margin-bottom: 10px;
            /* border: 1px gray solid; */
            resize: none;
            padding: 10px;
            font-family: sans-serif;
            font-size: 14px;
        }
        input[type="email"] { width: 278px; }
        input[type="submit"] { width: 302px; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <p class="text-center">Chernivtsi Academic Regional Ukrainian Music and Drama Theater named after Olga Kobylianska</p>
            <ul class="menu">
                <li>
                    @php
                        $current_month = date('m');
                        $next_month = date('m', strtotime('+1 month'));
                        $current_month = strtolower(date("F", mktime(0, 0, 0, $current_month, 1)));
                        $next_month = strtolower(date("F", mktime(0, 0, 0, $next_month, 1)));
                    @endphp
                    <a href="{{ url("/affiches/$current_month") }}"
                       class="{{ (url()->current() == url("/affiches/$current_month") || url()->current() == url("/affiches/$next_month")) ? 'current' : ''}}">
                        Affiches
                    </a>
                </li>
                <li>
                    <a href="{{ url("/theater/history") }}"
                        class="{{ (url()->current() == url("/theater/history") || url()->current() == url("/theater/photo") || url()->current() == url("/theater/scenes") || url()->current() == url("/theater/hallplan")) ? 'current' : ''}}">
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
                    <a href="{{ url("/vacancies") }}"
                        class="{{ url()->current() == url("/vacancies") ? 'current' : ''}}">
                        Vacancies
                    </a>
                </li>
                <li>
                    {{-- <a href="{{ url("/tickets") }}"
                        class="{{ url()->current() == url("/tickets") ? 'current' : ''}}">
                        Tickets
                    </a> --}}
                    <a href="https://teatr.portmone.com.ua/chernovtsy/theatres/" target="_blank">Tickets</a>
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
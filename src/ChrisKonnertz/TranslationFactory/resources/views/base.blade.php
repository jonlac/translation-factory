<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Visit me on GitHub: https://github.com/chriskonnertz/translation-factory -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="ChrisKonnertz">
    <meta name="base-url" content="{!! url('/') !!}">
    <meta name="asset-url" content="{!! asset('') !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="locale" content="{!! Config::get('app.locale') !!}">

    <title>Laravel Translation Factory - @yield('title')</title>

    <link rel="icon" type="image/png" href="{!! asset('img/favicon_180.png') !!}"><!-- Opera Speed Dial Icon -->
    <link rel="shortcut icon" type="picture/x-icon" href="{!! asset('favicon.png') !!}">

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    <style>
        a, a:focus, a:hover, a:active {
            color: #f4645f;
            text-decoration: none !important;
        }
        #sidebar {
            position: fixed;
            width: 10rem;
            height: 100vh;
            padding: 16px;
            background-color: #f8f9fa;
        }
        #logo {
            display: block;
            margin-bottom: 32px;
            padding: 8px 16px;
            background-color: #f4645f;
            color: white;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-align: center;
            font-weight: bold;
        }
        #nav li {
            display: block;
        }
        #nav a {
            display: block;
            padding: 5px 0;
            color: #999;
            font-weight: bold;
        }
        #nav a:hover {
            color: #f4645f !important;
        }
        #main-container {
            margin-left: 10rem;
        }
        #content {
            min-height: 100vh;
            margin-bottom: 0;
            padding: 1rem 4rem 4rem 4rem; /* padding-bottom = 1rem + 3rem(=footer height) */
        }
        #footer {
            position: relative;
            margin-top: -3rem; /* = total height of the footer */
            padding: 1rem 4rem;
            line-height: 1rem;
            color: #999;
        }

        .bag-tile-wrapper {
            box-sizing: border-box;
            float: left;
            width: 33%;
            padding-right: 1rem;
        }
        .bag-tile {
            display: block;
            border: 1px solid #EEE;
            margin: 1rem 0;
            padding: 1rem;
        }
        .bag-tile:hover {
            border-color: #DDD;
        }
        .bag-tile .icon-wrapper {
            width: 2rem;
            height: 2rem;
            padding: 0.45rem 0;
            background-color: #f4645f;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <aside id="sidebar">
        <a id="logo" class="rounded" href="{{ url('/translation-factory') }}">
            Translation<br>
            Factory
        </a>
        <nav id="nav">
            <ul>
                <li>
                    <a href="{{ url('/translation-factory') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('/') }}">Website</a>
                </li>
                <li>
                    <a href="https://github.com/chriskonnertz/translation-factory/issues" target="_blank">Support</a>
                </li>
                <li>
                    <a href="{{ url('/translation-factory/logout') }}">Logout</a>
                </li>
            </ul>
        </nav>
    </aside>

    <div id="main-container">
        <section id="content">
            @section('content')
                Hello, world!
            @show
        </section>

        <footer id="footer">
            Version {{ \ChrisKonnertz\TranslationFactory\TranslationFactory::VERSION }}.
            Created by <a href="http://www.chriskonnertz.de/" target="_blank">Chris Konnertz</a> in 2017.
            Licensed under the MIT License.
            More on <a href="https://github.com/chriskonnertz/translation-factory" target="_blank">GitHub</a>.
        </footer>
    </div>
</body>
</html>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Laravel News</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.carousel-main.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.carousel-content.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/home-slider-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/carousel-portfolio-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/carousel-blog-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/carousel-testimonials-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/carousel-clients-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/portfolio-blog-slider-settings.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/portfolio-settings.js') }}"></script>

</head>

<body class="light-bg home">
    <div class="main-container">
        @section('header')
        <div class="topbar-outer dark">
            <div class="topbar content-width">
                <div class="table fullheight">
                    <div class="table-cell fullheight middle">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img alt="" src="\img\topbar\logo_white.png" height="17">
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="topsocial">
                    <li><a href="https://www.linkedin.com/in/alexander-shumilo-67b57ba9/"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                    </li>
                    <li><a href="https://www.facebook.com/alex.shumilo"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                    </li>
                </ul>

                <ul class="topnav">
                    <li><a href="{{ route('home') }}" {!! Request::is('/') ? ' class="current"' : null !!}>Главная</a></li>
                    <li><a href="{{ route('about') }}" {!! Request::is('about') ? ' class="current"' : null !!}>О компании</a></li>
                    <li><a href="{{ route('portfolio') }}" {!! Request::is('portfolio') ? ' class="current"' : null !!}>Проекты</a></li>
                    <li><a href="{{ route('news') }}" {!! (Request::segment(1) == 'news') ? ' class="current"' : null !!}>Новости</a></li>
                    <li><a href="{{ route('contacts') }}" {!! Request::is('contacts') ? ' class="current"' : null !!}>Контакты</a></li>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <li ><a href="{{ route('admin.home') }}" style="color: red"><b>Админчасть</b></a></li>
                    @endif
                </ul>
                <div class="login">
                    @if(Auth::check())
                        <p>Вы вошли как: <span class="user_name">{{ Auth::user()->name }}</span> |</p>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">Войти на сайт</a>
                    @endif
                </div>
                <a href="#" class="mobilenav-click">
                    <div class="mobilenav-button-container">
                        <div class="mobilenav-button-inner">
                            <div class="mobilenav-button"></div>
                        </div>
                    </div>
                </a>
                <div class="mobilenav-container">
                    <ul class="mobilenav">
                    </ul>
                </div>
            </div>
        </div>
        @show

        @yield('banner')

        <div class="main-content">
            <div class="main-content-inner content-width">

            @yield('content')

            </div>
        </div>

            @yield('footer_index')

            @section('footer')
            <div class="footer">
                <div class="content-width">
                    <!-- Four Columns -->
                    <div class="column-container">
                        @foreach($footerLastNews as $news)
                        <div class="column-one-fourth">
                            <p style="color:white; font-size:14px">ГОРЯЧАЯ НОВОСТЬ</p>
                            <p>{{ $news->news_title }}</p>
                            <p>{{ $news->news_short_content }}</p>
                            <p><a href="{{ route('news.detail', ['category'=>$news->category->category_code, 'news_code'=>$news->news_code]) }}">Читать далее</a>
                            </p>
                        </div>
                        @endforeach
                        <div class="column-one-fourth">
                            <div class="footer-flickr-container">
                            <h3>Галерея</h3>
                                <script type="text/javascript" src="{{ URL::asset('js/flickr.js') }}"></script>
                            </div>
                        </div>
                        <div class="column-one-fourth">
                            <h3>Ждем Вас</h3>
                            <ul class="footer-social">
                                <li>
                                    <a href="https://www.linkedin.com/in/alexander-shumilo-67b57ba9/"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/alex.shumilo"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-lower-container">
                        <ul class="footer-lower">
                            <li><a href="{{ route('home') }}">Главная</a>
                            </li>
                            <li><a href="{{ route('about') }}">О нас</a>
                            </li>
                            <li><a href="{{ route('portfolio') }}">Проекты</a>
                            </li>
                            <li><a href="{{ route('news') }}">Новости</a>
                            </li>
                            <li><a href="{{ route('contacts') }}">Контакты</a>
                            </li>
                        </ul>
                        <div class="footer-copyright">
                            &copy; {{ date('Y') }} | Wonde - универсальный бизнес шаблон сайта
                        </div>
                    </div>
                    <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
            @show
    </div>
</body>
</html>
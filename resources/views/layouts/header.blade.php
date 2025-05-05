    <header class="nk-header page-header is-transparent is-sticky is-shrink" id="header">
        <!-- Header @s -->
        <div class="header-main">
            <div class="header-container container">
                <div class="header-wrap">
                    <!-- Logo @s -->
                    <div class="header-logo logo">
                        <a href="{{route('home')}}" class="logo-link">
                            <img class="logo-dark" src="{{asset('images/logo.png')}}" srcset="{{asset('images/logo2x.png 2x')}}" alt="logo">
                            <img class="logo-light" src="{{asset('images/logo-full-white.png')}}" srcset="{{asset('images/logo-full-white2x.png 2x')}}" alt="logo">
                        </a>
                    </div>
                    <!-- Menu Toogle @s -->
                    <div class="header-nav-toggle">
                        <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                            <div class="toggle-line">
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <!-- Menu @s -->
                    <div class="header-navbar">
                        <nav class="header-menu" id="header-menu">
                            <ul class="menu">
                                <li class="menu-item has-sub">
                                    <a class="menu-link nav-link menu-toggle" href="#">{{__('О платформе')}}</a>
                                    <ul class="menu-sub menu-drop">
                                        <li class="menu-item"><a class="menu-link nav-link" href="{{route('home')}}#about">{{__('Описание')}}</a></li>
                                        <li class="menu-item"><a class="menu-link nav-link" href="{{route('home')}}#problem">{{__('Проблемы и решение')}}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link nav-link" href="{{route('home')}}#arhitech">{{__('Структура')}}</a></li>
                                <li class="menu-item"><a class="menu-link nav-link" href="{{route('home')}}#features">{{__('О токене SUR')}}</a></li>
                                <li class="menu-item"><a class="menu-link nav-link" href="{{route('home')}}#roadmap">{{__('Дорожная карта')}}</a></li>
                                <li class="menu-item"><a class="menu-link nav-link" href="{{asset('assets/docs/WhitePaperSUR.pdf')}}" target="_blank"><strong>{{__('White Paper')}}</strong></a></li>
                            </ul>
                            <ul class="menu-btns">
                                <li><a href="https://dyor.io/ru/token/EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y" class="btn btn-md btn-auto btn-grad no-change btn-free-buy"><span>{{__('Купить SUR')}}</span></a></li>
                            </ul>
                        </nav>
                    </div><!-- .header-navbar @e -->
                </div>
            </div>
        </div><!-- .header-main @e -->
        <!-- Banner @s -->
        @if(Route::is('home'))
        <div class="header-banner bg-theme-grad">
            <div class="nk-banner">
                <div class="banner banner-fs banner-single banner-gap-b2">
                    <div class="banner-wrap">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-5 order-lg-last">
                                    <div class="banner-gfx banner-gfx-re-s1">
                                        <img src="{{asset('images/header/gfx-a.png')}}" alt="header">
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-7 col-sm-10 text-center text-lg-start">
                                    <div class="banner-caption cpn tc-light">
                                        <div class="cpn-head">
                                            <h1 class="title-up">{{__('Товарно-ресурсная логистическая платформа ')}}<br class="d-none d-md-block">{{__('кооперативного взаимодействия')}}</h1>
                                        </div>
                                        <div class="cpn-text">
                                            <p>{{__('стань частью будущего финансовых технологий с цифровым паем SUR')}}</p>
                                        </div>
                                        <div class="cpn-action">
                                            <div class="cpn-btns">
                                                <a class="btn btn-grad btn-free pt-5 pb-5" href="{{route('gift')}}">{{__('Получить ')}}7.54 SUR {{' бесплатно сейчас'}}</a>
                                            </div>
                                            <ul class="cpn-links">
                                                <li><a class="link" href="https://dyor.io/ru/token/EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y"><em class="link-icon far fa-lightbulb"></em><span>{{__('Купить еще')}}</span></a></li>
                                                <li><a class="link" href="{{asset('assets/docs/WhitePaperSUR.pdf')}}" target="_blank"><em class="link-icon fas fa-file-alt"></em><span>White Paper</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                </div>
            </div><!-- .nk-banner -->
            <div class="nk-ovm mask-a shape-a"></div>
            <!-- Place Particle Js -->
            <div id="particles-bg" class="particles-container particles-bg"></div>
        </div>
        @endif
        <!-- .header-banner @e -->
    </header>

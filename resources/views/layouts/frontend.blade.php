<!doctype html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @vite(['resources/sass/app.scss', 'resources/js/frontend.js'])
</head>
<style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
</style>

<body>
    <div class="ie-panel">
    </div>
    <div id="page-loader">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
    </div>
    <header class="page-header"
        data-preset='{"title":"Header Default","category":"headers","reload":true,"id":"header-1"}'>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true"
                data-md-stick-up="true" data-lg-stick-up="true" data-md-stick-up-offset="115px"
                data-lg-stick-up-offset="35px">
                <!-- RD Navbar Top Panel-->
                <div class="rd-navbar-top-panel-outer rd-navbar-top-panel-outer-dark novi-background">
                    <div class="rd-navbar-top-panel">
                        <div class="rd-navbar-top-panel__main">
                            <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden"
                                data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                            <div class="rd-navbar-top-panel__content">
                                <div class="rd-navbar-top-panel__left">
                                    <ul class="rd-navbar-items-list">
                                        <li>
                                            <div class="unit flex-row align-items-center unit-spacing-xs">
                                                <div class="unit__body">
                                                    <p><a href="#">H-ONE KOGI PRIMA AUTO TECHNOLOGIES
                                                            INDONESIA</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rd-navbar-top-panel__right">
                                    <ul class="list-inline-xxs">
                                        <li><a href="#">Mon - Fri: 07:00 - 16:00 / Closed on Weekends</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-item-outer novi-background">
                    <div class="rd-navbar-inner rd-navbar-search-wrap">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand-n1ame" href="{{ url('/') }}"><img
                                        src="{{ asset('assets/img/logo/logo_hkpati.gif') }} " alt=""
                                        width="149" height="42"
                                        srcset="{{ asset('assets/img/logo/logo_hkpati.gif') }}  2x" /></a></div>
                        </div>
                        <!-- RD Navbar Nav-->
                        <div class="rd-navbar-nav-wrap rd-navbar-search_collapsable">
                            <!-- RD Navbar Nav-->
                            <div class="rd-navbar__element rd-navbar-search_collapsable">

                                <ul class="rd-navbar-nav">
                                    @guest
                                        @if (Route::has('login'))
                                            <li><a class="button button-primary" href="{{ url('login') }}"><span
                                                        style="color:   white">Login</span></a></li>
                                        @endif
                                    @else
                                        <li><a href="#" onclick="return false;">{{ Auth::user()->name }}</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li>
                                                    <a href="{{ route('home') }}">
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>
                                        {{-- <li class="rd-navbar-dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li> --}}
                                    @endguest
                                </ul>
                            </div>
                            <div class="rd-navbar-search_collapsable">
                                <ul class="rd-navbar-nav">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('company') }}">Company Overview</a></li>
                                    <li><a>Product & Services</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="{{ url('product/overallfactory') }}">Overall Factory Process
                                                </a>
                                            </li>
                                            <li><a href="{{ url('product/partsbusiness') }}">Parts Business</a>
                                            </li>
                                            <li><a href="{{ url('product/diesbusiness') }}">Dies Business</a>
                                            </li>
                                            <li><a href="{{ url('product/castingbusiness') }}">Casting Business</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a>Sustainbility</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="{{ url('sustainbility/environment') }}">Environtment</a>
                                            </li>
                                            <li><a href="{{ url('sustainbility/social') }}">Social</a>
                                            </li>
                                            <li><a href="{{ url('sustainbility/governance') }}">Governance</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="app">
        <main class="pb-0">
            @yield('content')
        </main>
        <!-- Page Footer -->
        <section class="section pre-footer-corporate bg-gray-darker novi-background"
            data-preset='{"title":"Pre-footer Corporate","category":"footers,maps","reload":true,"id":"footer-1"}'>
            <div class="container">
                <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
                    <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3"><a class="brand"
                            href="{{ url('/') }}"><img src="{{ url('assets/img/hero/hkp.PNG') }}"
                                alt="" width="149" height="42"
                                srcset="{{ asset('assets/img/hero/hkp.PNG') }} 2x" /></a>
                        <p>PT HK-PATI is a company engaged in the Dies and Casting sector</p>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
                        <h6>Navigation</h6>
                        <ul class="list-xxs list-primary">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('company') }}">Company Overview</a></li>
                            <li><a>Product & Services</a>
                                <ul class="rd-navbar-dropdown">
                                    <li class="ml-2"><a href="{{ url('overallfactory') }}">- Overall Factory
                                            Process
                                        </a>
                                    </li>
                                    <li class="ml-2"><a href="{{ url('partsbusiness') }}">- Parts Business</a>
                                    </li>
                                    <li class="ml-2"><a href="{{ url('diesbusiness') }}">- Dies Business</a>
                                    </li>
                                    <li class="ml-2"><a href="{{ url('castingbusiness') }}">- Casting Business</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a>Sustainbility</a>
                                <ul class="rd-navbar-dropdown">
                                    <li class="ml-2"><a href="{{ url('overallfactory') }}">- Environtment</a>
                                    </li>
                                    <li class="ml-2"><a href="{{ url('partsbusiness') }}">- Social</a>
                                    </li>
                                    <li class="ml-2"><a href="{{ url('diesbusiness') }}">- Governance</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
                        <h6>Contacts</h6>
                        <ul class="list-xs">
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Address</dt>
                                    <dd>Jl. Inspeksi Tarum Barat (DEPAN PERURI), Desa Parung Mulya, Kecamatan Ciampel,
                                        Karawang 41361.</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Phones</dt>
                                    <dd>
                                        <ul class="list-semicolon">
                                            <li><a href="tel:#">+62 267 8630555</a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>E-mail</dt>
                                    <dd><a class="link-primary" href="mailto:#">info@demolink.org</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>We are open</dt>
                                    <dd>Mon - Fri: 07:00 - 16:00 / Closed on Weekends</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3 google-map-footer-outer">
                        <div class="google-map-footer">
                            <!-- RD Google Map-->
                            <div id="map" style="height: 50vh;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="section footer-corporate bg-gray-darkest novi-background"
            data-preset='{"title":"Footer Corporate","category":"footers","reload":false,"id":"footer-2"}'>
            <div class="container">
                <div class="footer-corporate__inner">
                    <p class="rights"><span>Copyright ©2024 All rights reserved | Created by HK-PATI</span>
                        <!--{DEL}-->
                    </p>
                    <ul class="list-inline-xxs">
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-globe" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-linkedin" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output -->
    <div class="snackbars" id="form-output-global"></div>
</body>

</html>

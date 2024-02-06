<!doctype html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
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
                                                <div class="unit__left"><span
                                                        class="icon icon-sm icon-primary linear-icon-map-marker"></span>
                                                </div>
                                                <div class="unit__body">
                                                    <p><a href="#">Address: 4578 Marmora Road, Glasgow, D04
                                                            89GR</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-row align-items-center unit-spacing-xs">
                                                <div class="unit__left"><span
                                                        class="icon icon-sm icon-primary linear-icon-telephone"></span>
                                                </div>
                                                <div class="unit__body">
                                                    <ul class="list-semicolon">
                                                        <li><a href="tel:#">(800) 123-0045</a></li>
                                                        <li><a href="tel:#">(800) 123-0045 </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rd-navbar-top-panel__right">
                                    <ul class="list-inline-xxs">
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus"
                                                href="#"></a></li>
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest-p"
                                                href="#"></a></li>
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
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img
                                        src="images/logo-default-149x42.png" alt="" width="149"
                                        height="42" srcset="images/logo-default-298x84.png 2x" /></a></div>
                        </div>
                        <!-- RD Navbar Nav-->
                        <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                            <!-- Navbar Login-->
                            <div class="rd-navbar-search_collapsable">
                                <ul class="rd-navbar-nav">
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Join With Us') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
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
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                            {{-- Navbar utama --}}
                            <div class="rd-navbar-search_collapsable">
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html">Company Overview</a></li>
                                    <li><a href="about.html">Products & Services</a> </li>
                                    <li><a href="about.html">Sustainbility</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="our-team.html">Our Team</a>
                                            </li>
                                            <li><a href="team-member-profile.html">Team Member Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Gallery</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        <!-- Page Footer -->
        <section class="section pre-footer-corporate bg-gray-darker novi-background"
            data-preset='{"title":"Pre-footer Corporate","category":"footers,maps","reload":true,"id":"footer-1"}'>
            <div class="container">
                <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
                    <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3"><a class="brand" href="index.html"><img
                                src="images/logo-inverse-149x42.png" alt="" width="149" height="42"
                                srcset="images/logo-inverse-298x84.png 2x" /></a>
                        <p>Our core values have been shaped over more than 10 years of delivering the finest
                            construction
                            services to our clients. They stood to the test of time and these principles remain our
                            bedrock
                            lynchpins. We never tried to cut on either quality, the pace of work or any other
                            construction
                            aspect. We stay true to our full promise of efficiency!</p>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
                        <h6>Navigation</h6>
                        <ul class="list-xxs list-primary">
                            <li><a href="blog.html">Industry News</a></li>
                            <li><a href="projects.html">Projects in Development</a></li>
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
                        <h6>Contacts</h6>
                        <ul class="list-xs">
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Address</dt>
                                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-minimal">
                                    <dt>Phones</dt>
                                    <dd>
                                        <ul class="list-semicolon">
                                            <li><a href="tel:#">(800) 123-0045</a></li>
                                            <li><a href="tel:#">(800) 123-0045</a></li>
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
                                    <dd>Mn-Fr: 10 am-8 pm</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3 google-map-footer-outer">
                        <div class="google-map-footer">
                            <!-- RD Google Map-->
                            <div class="google-map-container google-map-container-absolute" data-zoom="15"
                                data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                                data-styles="[{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;all&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;labels.text&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative.locality&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;saturation&quot;:&quot;-100&quot;},{&quot;lightness&quot;:&quot;30&quot;}]},{&quot;featureType&quot;:&quot;administrative.neighborhood&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;administrative.land_parcel&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;gamma&quot;:&quot;0.00&quot;},{&quot;lightness&quot;:&quot;74&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:&quot;3&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#000000&quot;},{&quot;lightness&quot;:17}]}]"
                                data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png">
                                <div class="google-map google-map-absolute"></div>
                                <ul class="google-map-markers">
                                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                                        data-description="Address: 4578 Marmora Road, Glasgow, D04 89GR &lt;br&gt; Phones: (800) 123-0045; (800) 123-0046 &lt;br&gt; We are open: Mn-Fr: 10 am-8 pm">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="section footer-corporate bg-gray-darkest novi-background"
            data-preset='{"title":"Footer Corporate","category":"footers","reload":false,"id":"footer-2"}'>
            <div class="container">
                <div class="footer-corporate__inner">
                    <p class="rights"><span>Quarter Construction</span><span>&nbsp;</span><span
                            class="copyright-year"></span>. All Rights Reserved.<span>&nbsp;</span><a
                            href="privacy-policy.html">Terms of Use and Privacy Policy</a>
                        <!--{DEL LIVEDEMO TFDEMO USERPACKAGE ZEMEZ_LINK BLD}--><span> .</span><span>
                            Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></span>
                        <!--{DEL}-->
                    </p>
                    <ul class="list-inline-xxs">
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>
                        <li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output -->
    <div class="snackbars" id="form-output-global"></div>
</body>

</html>

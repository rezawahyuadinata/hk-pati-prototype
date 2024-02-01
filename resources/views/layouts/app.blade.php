<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Page Loader-->
    <div id="page-loader">
        <div class="page-loader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>
    <!-- Page-->
    <div class="page">
        @yield('content')
        <!-- RD Navbar Nav-->

        <!-- Page Footer-->
        <footer class="footer-corporate">
            <div class="footer-corporate__main bg-gray-darker novi-background bg-cover">
                <div class="shell shell-fluid shell-condensed">
                    <div class="range range-xs-center range_xl-ten range-50 footer-corporate__range">
                        <div class="cell-xs-10 cell-sm-6 cell-md-4 cell-lg-4 cell-xl-2 footer-corporate__column">
                            <h4 class="heading-bordered">Main Office</h4>
                            <ul class="list-md">
                                <li>
                                    <p class="address">6036 Richmond hwy., Alexandria, VA, 2230</p>
                                    <ul class="list-inline-0">
                                        <li>
                                            <dl class="list-terms-inline">
                                                <dt>Weekdays</dt>
                                                <dd>8:00–20:00</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="list-terms-inline">
                                                <dt>Weekends</dt>
                                                <dd>Closed</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Sales department</dt>
                                        <dd><a href="mailto:#">info@demolink.org</a></dd>
                                    </dl>
                                    <dl class="list-terms-inline">
                                        <dt>Support</dt>
                                        <dd><a href="mailto:#">infosupport@demolink.org</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Phone</dt>
                                        <dd><a href="tel:#">+62 267 8630555</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="cell-xs-10 cell-sm-6 cell-md-3 cell-lg-3 cell-xl-2 footer-corporate__column">
                            <h4 class="heading-bordered">Subscribe Now</h4>
                            <p>Get the latest updates and offers</p>
                            <!-- RD Mailform-->
                            <form class="rd-mailform rd-mailform_sm rd-mailform_centered box-width-2"
                                data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-email" type="email" name="email">
                                    <label class="form-label" for="subscribe-email">Enter your e-mail</label>
                                </div>
                                <button class="button button-sm button-block button-secondary"
                                    type="submit">Send</button>
                            </form>
                        </div>
                        <div class="cell-xs-6 cell-sm-6 cell-md-3 cell-lg-3 footer-corporate__column">
                            <h4 class="heading-bordered">Latest News</h4>
                            <ul class="post-group post-light-group">
                                <li>
                                    <article class="post-light">
                                        <p class="post-light__title"><a href="single-post.html">Email Newsletters Hit
                                                a Speed Bump with Inaccurate Open Rates</a></p>
                                        <time datetime="2018">April 13, 2018</time>
                                    </article>
                                </li>
                                <li>
                                    <article class="post-light">
                                        <p class="post-light__title"><a href="single-post.html">How We Measure the
                                                Increasing Vlogs' Ad Potential</a></p>
                                        <time datetime="2018">March 25, 2018</time>
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <div class="cell-xs-4 cell-sm-6 cell-md-2 cell-lg-2 cell-xl-1 footer-corporate__column">
                            <h4 class="heading-bordered">Links</h4>
                            <ul class="list-xxs list_darker">
                                <li><a href="index.html">Company Overview</a></li>
                                <li><a href="about-us.html">Product & Services</a>
                                </li>
                                <li><a href="services.html">Sustainability</a>
                                </li>
                                <li><a href="our-work.html">Industry Relation</a>
                                </li>
                                <li><a href="news.html">Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-corporate__aside bg-gray-base text-center novi-background bg-cover">
                <div class="shell shell-fluid shell-condensed">
                    <div class="range range-20 range-fix range_xl-ten footer-corporate__range">
                        <div class="cell-sm-8 cell-xl-6 footer-corporate__aside-column text-sm-left">
                            <!-- Rights-->
                            <p class="rights"><span> Copyright </span><span>&nbsp;&copy;&nbsp;</span><span
                                    class="copyright-year"></span>.&nbsp;<br class="veil-xs"> All rights reserved |
                                Created by HK-PATI</p>
                        </div>
                        <div class="cell-sm-4 cell-xl-4 footer-corporate__aside-column text-sm-right">
                            <ul class="list-inline-xxs">
                                <li><a class="icon novi-icon icon-xs icon-style-modern fa fa-globe" href="#"></a>
                                </li>
                                <li><a class="icon novi-icon icon-xs icon-style-modern fa fa-linkedin"
                                        href="https://www.linkedin.com/company/pt-h-one-kogi-prima-auto-technologies-indonesia/"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/pointer-events.min.js') }}"></script>
</body>

</html>

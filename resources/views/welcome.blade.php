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
        <!-- Page Header-->
        <!-- RD Navbar Nav-->
        <header class="page-header section">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth"
                    data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px"
                    data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-aside-outer rd-navbar-content-outer novi-background bg-cover">
                        <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden"
                            data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                        <div class="rd-navbar-aside rd-navbar-content">
                            <div class="rd-navbar-aside__item">
                                <ul class="rd-navbar-items-list">
                                    <li>
                                        <div class="unit unit-spacing-xxs unit-horizontal">
                                            <div class="unit__body">
                                                <p>H-ONE KOGI PRIMA AUTO TECHNOLOGIES INDONESIA</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="rd-navbar-aside__item">
                                <ul class="rd-navbar-items-list">
                                    <li>
                                        <div class="unit unit-spacing-xxs unit-horizontal">
                                            <div class="unit__body">Mon - Fri: 07:00 - 16:00 / Closed on Weekends</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer novi-background bg-cover">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel -->
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="index.html">
                                        <div class="brand__name"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                                alt="" width="270" height="94" />
                                        </div>
                                    </a></div>
                            </div>
                            <!-- RD Navbar Nav -->
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-main-item"><a class="button button-xs button-primary"
                                        href="contacts.html">Login</a></div>
                                <div class="rd-navbar-main-item"><a class="button button-xs button-primary"
                                        href="contacts.html">Register</a></div>
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html">Company Overview</a>
                                    </li>
                                    <li><a href="about-us.html">Product & Services</a>
                                    </li>
                                    <li><a href="#">Sustainbility</a>
                                        <!-- RD Navbar Dropdown-->
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="404-page.html">page 1</a>
                                            </li>
                                            <li><a href="search-results.html">page 2</a>
                                            </li>
                                            <li><a href="privacy-policy.html">page 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="our-work.html">Industri Relation</a>
                                    </li>
                                    <li><a href="contacts.html">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Swiper-->
        <section class="section section-layout-1 novi-section novi-background">
            <div class="section-layout-main">
                <div class="swiper-container swiper-slider swiper-slider_style-2" data-loop="true" data-autoplay="5000"
                    data-simulate-touch="false" data-slide-effect="fade">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-slide-bg="{{ asset('assets/img/hero/hkpati.JPG') }}">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range range-fix">
                                        <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                            <h1 data-caption-animate="fadeInUpSmall">Welcome to PT H-one Kogi Prima Auto
                                                Technologies Indonesia
                                            </h1>
                                            <div class="object-decorated">
                                                <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                    PT H-one Kogi Prima Auto Technologies Indonesia is a Japanese
                                                    foreign investment company (PMA) which operates in the automotive
                                                    sector and is one of the vendors of PT HPM (Honda Prospect Motor).
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-slide-bg="{{ asset('assets/img/hero/hkpati.JPG') }}">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range range-fix">
                                        <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                            <h1 data-caption-animate="fadeInUpSmall">Quality Policy
                                            </h1>
                                            <div class="object-decorated">
                                                <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">
                                                    PT HK-PATI is committed to always increasing customer satisfaction
                                                    and fulfilling applicable regulations and requirements by
                                                    guaranteeing the quality of goods according to the required
                                                    standards, and delivery of goods is always on time and in the right
                                                    quantity.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section-layout-aside">
                <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img
                            class="thumb-modern__image" src="{{ asset('assets/img/hero/hkpati.JPG') }}"
                            alt="" width="538" height="200" />
                        <div class="thumb-modern__caption">
                            <p class="thumb-modern__title">Strategy</p>
                        </div>
                    </a></div>
                <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img
                            class="thumb-modern__image" src="{{ asset('assets/img/hero/hkpati.JPG') }}"
                            alt="" width="498" height="195" />
                        <div class="thumb-modern__caption">
                            <p class="thumb-modern__title">Creativity</p>
                        </div>
                    </a></div>
                <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img
                            class="thumb-modern__image" src="{{ asset('assets/img/hero/hkpati.JPG') }}"
                            alt="" width="460" height="195" />
                        <div class="thumb-modern__caption">
                            <p class="thumb-modern__title">Innovation</p>
                        </div>
                    </a></div>
            </div>
        </section>

        <!-- Our company-->
        <section class="section section-lg bg-white novi-background bg-cover">
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h2>Our Company</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <div class="range range-sm-center range-md-left range-md-middle range-50">
                            <div class="cell-sm-10 cell-md-5 cell-lg-5">
                                <p>HK-PATI began construction in June 2013, from a combination of 3 large companies,
                                    namely: H-ONE Japan, Kogi Japan and Roda Prima Lancar. Currently it has started
                                    production and serves large companies like Toyota and most other companies operating
                                    in the automotive sector that require dies for their production processes. Supported
                                    by experts in their fields and with strict quality control to maintain the best
                                    quality of production, guaranteed customer satisfaction can be achieved.
                                    <br>
                                    Increasing quality human resources through training so that they are always
                                    competent in their fields, as well as improving the effectiveness of the quality
                                    management system and paying attention to safety elements in every process carried
                                    out within HK-PATI
                                </p>
                            </div>
                            <div class="cell-sm-10 cell-md-7 cell-xl-6">
                                <div class="box-spacer-left box-spacer-left-lg"><img
                                        src="{{ asset('assets/img/hero/h3_hero.JPG') }}" alt=""
                                        width="731" height="361" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Visi & Misi --}}
        <section class="section section-sm bg-white novi-background bg-cover">
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h2>Vission & Mission</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shell">
                <div class="range range-50 range-sm-center range-md-left range-lg-justify">
                    <div class="cell-sm-10 cell-md-6">
                        <div class="card">
                            <div class="card-head">
                                <h4>Our Vission</h4>
                            </div>
                            <br>
                            <div class="card-body">
                                <p>To become the world's best quality automotive and metal parts
                                    manufacturing
                                    company
                                    in
                                    Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-10 cell-md-6 cell-lg-5">
                        <div class="card">
                            <div class="card-head mb-5">
                                <h4>Our Mission</h4>
                            </div>
                            <br>
                            <div class="card-body">
                                1. Improving the welfare of stakeholders by prioritizing occupational health and safety
                                <br>
                                2. Increasing customer satisfaction through producing goods of the best quality,
                                competitive prices and on-time delivery
                                <br>
                                3. Continuously develop the quality of human resources
                                <br>
                                4. Always innovate with environmentally friendly technology to improve production
                                quality and work systems in the company
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Clients-->
        <section class="section section-md bg-white text-center novi-background bg-cover">
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h2>Our Clients</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shell-fluid">
                <div class="range range-condensed range-md-reverse range-flex">
                    <div class="cell-md-6 bg-gray-dark bg-image novi-background custom-bg-image"
                        style="background-image: url(images/parallax-5.jpg);">
                        <div class="section-variant-1">
                            <!-- Owl Carousel-->
                            <div class="owl-carousel owl-carousel_style-3" data-items="1" data-autoplay="true"
                                data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true"
                                data-margin="30" data-mouse-drag="false">
                                <div class="item">
                                    <!-- Quote light-->
                                    <article class="quote-light">
                                        <div class="quote-light__image-wrap"><img class="quote-light__image"
                                                src="{{ asset('assets/images/testimonials-1-88x88.jpg') }}"
                                                alt="" width="88" height="88" />
                                        </div>
                                        <div class="quote-light__main">
                                            <p class="q">HK-PATI was a great strategic partner and provided
                                                valuable insights to support our turnaround. Their understanding of our
                                                business and the marketplace resulted in recommendations to help fuel
                                                our success.</p>
                                            <ul class="quote-light__meta">
                                                <li><span class="cite">Samuel Johnson</span></li>
                                                <li><span class="small">CEO “BTC Ltd.”</span></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote light-->
                                    <article class="quote-light">
                                        <div class="quote-light__image-wrap"><img class="quote-light__image"
                                                src="{{ asset('assets/images/testimonials-2-88x88.jpg') }}"
                                                alt="" width="88" height="88" />
                                        </div>
                                        <div class="quote-light__main">
                                            <p class="q">Your company is very knowledgeable. I love the approach
                                                you bring to problems. I have always felt that the people here were part
                                                of our team. To this day, that is a huge differentiator.</p>
                                            <ul class="quote-light__meta">
                                                <li><span class="cite">John Williams</span></li>
                                                <li><span class="small">CEO “InterInverse”</span></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote light-->
                                    <article class="quote-light">
                                        <div class="quote-light__image-wrap"><img class="quote-light__image"
                                                src="{{ asset('assets/images/testimonials-3-88x88.jpg') }}"
                                                alt="" width="88" height="88" />
                                        </div>
                                        <div class="quote-light__main">
                                            <p class="q">This advertising agency has been critical in the growth
                                                of our marketing capabilities, especially in a part of our business
                                                where we were trying to go from one brand to another very quickly.</p>
                                            <ul class="quote-light__meta">
                                                <li><span class="cite">Will Peters</span></li>
                                                <li><span class="small">CEO “Betaworks”</span></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-6">
                        <div class="link-block-group novi-section"><a
                                class="link-block link-block-light novi-background" href="#"><img
                                    src="{{ asset('assets/images/brand-1-216x102.png') }}" alt=""
                                    width="216" height="102" /></a><a class="link-block novi-background"
                                href="#"><img src="{{ asset('assets/images/brand-2-155x34.png') }}"
                                    alt="" width="155" height="34" /></a><a
                                class="link-block novi-background" href="#"><img
                                    src="{{ asset('assets/images/brand-3-122x33.png') }}" alt=""
                                    width="122" height="33" /></a><a
                                class="link-block link-block-light novi-background" href="#"><img
                                    src="{{ asset('assets/images/brand-4-100x76.png') }}" alt=""
                                    width="100" height="76" /></a></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News-->
        <section class="section section-md bg-white novi-background bg-cover">
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h2>News</h2>
                            <div class="section__header-element"><a class="link link-arrow"
                                    href="news.html"><span>Read Our News</span></a></div>
                        </div>
                        <div class="range range-center range-30 range-flex">
                            <div class="cell-sm-10 cell-lg-6">
                                <article class="post-modern novi-background"><a class="post-modern__image-wrap"
                                        href="single-post.html"><img class="post-modern__image"
                                            src="{{ asset('assets/images/post-4-764x215.jpg') }}" alt=""
                                            width="764" height="215" /></a>
                                    <div class="post-modern__main">
                                        <p class="post-modern__title"><a href="single-post.html">Email Newsletters Hit
                                                a Speed Bump with Inaccurate Open Rates</a></p>
                                        <p class="post-modern__text">As Clover Letter Emails Got Bigger in size,
                                            Founders Say, Its Open Rate Collapsed. Email newsletters are just as
                                            effective when working with existing customers, as they were from the very
                                            start.Also, the part of the problem...</p>
                                        <ul class="post-modern__meta">
                                            <li><span class="icon novi-icon icon-primary mdi mdi-clock"></span><a
                                                    href="single-post.html">January 6, 2018</a></li>
                                            <li><span
                                                    class="icon novi-icon icon-primary fl-justicons-user140"></span><span>John
                                                    Doe</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="cell-sm-5 cell-lg-3">
                                <article class="post-modern novi-background"><a class="post-modern__image-wrap"
                                        href="single-post.html"><img class="post-modern__image"
                                            src="{{ asset('assets/images/post-1-365x215.jpg') }}" alt=""
                                            width="365" height="215" /></a>
                                    <div class="post-modern__main">
                                        <p class="post-modern__title"><a href="single-post.html">How We Measure the
                                                Increasing Vlogs' Ad Potential</a></p>
                                        <p class="post-modern__text">We have recently finished our research, which is
                                            closely connected</p>
                                        <ul class="post-modern__meta">
                                            <li><span class="icon novi-icon icon-primary mdi mdi-clock"></span><a
                                                    href="single-post.html">January 6, 2018</a></li>
                                            <li><span
                                                    class="icon novi-icon icon-primary fl-justicons-user140"></span><span>John
                                                    Doe</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="cell-sm-5 cell-lg-3">
                                <article class="post-modern novi-background"><a class="post-modern__image-wrap"
                                        href="single-post.html"><img class="post-modern__image"
                                            src="{{ asset('assets/images/post-2-365x215.jpg') }}" alt=""
                                            width="365" height="215" /></a>
                                    <div class="post-modern__main">
                                        <p class="post-modern__title"><a href="single-post.html">Digital Marketing
                                                Metrics That Really Matter Nowadays</a></p>
                                        <p class="post-modern__text">Marketing is currently in a state of evolution
                                            where it is dispensing</p>
                                        <ul class="post-modern__meta">
                                            <li><span class="icon novi-icon icon-primary mdi mdi-clock"></span><a
                                                    href="single-post.html">January 6, 2018</a></li>
                                            <li><span
                                                    class="icon novi-icon icon-primary fl-justicons-user140"></span><span>John
                                                    Doe</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contacts --}}
        <section class="section section-lg bg-white novi-background bg-cover">
            <div class="shell shell-wide">
                <div class="range range-md-center range-fix">
                    <div class="cell-lg-11">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h2>Our Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shell">
                <div class="layout-bordered">
                    <div class="layout-bordered__main text-center">
                        <div class="layout-bordered__main-inner">
                            <h3>Get in Touch</h3>
                            <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form
                                to ask a question about our services and projects.</p>
                            <!-- RD Mailform-->
                            <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                                method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                                <div class="range range-fix range-sm-bottom range-20">
                                    <div class="cell-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation"
                                                id="contact-first-name" type="text" name="first-name"
                                                data-constraints=""><span class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-first-name">First
                                                name</label>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-phone"
                                                type="text" name="phone" data-constraints=""><span
                                                class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <div class="form-wrap">
                                            <label class="form-label rd-input-label" for="contact-message">Your
                                                Message</label>
                                            <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message"
                                                data-constraints=""></textarea><span class="form-validation"></span>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-email"
                                                type="email" name="email" data-constraints=""><span
                                                class="form-validation"></span>
                                            <label class="form-label rd-input-label"
                                                for="contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <button class="button button-block button-primary" type="submit">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="layout-bordered__aside">
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Get social </p>
                            <ul class="list-inline-xs">
                                <li><a class="icon novi-icon icon-middle icon-sm icon-default fa fa-facebook"
                                        href="#"></a></li>
                                <li><a class="icon novi-icon icon-middle icon-sm icon-default fa fa-twitter"
                                        href="#"></a></li>
                                <li><a class="icon novi-icon icon-middle icon-sm icon-default fa fa-google"
                                        href="#"></a></li>
                                <li><a class="icon novi-icon icon-middle icon-sm icon-default fa fa-youtube"
                                        href="#"></a></li>
                            </ul>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Phone</p>
                            <div class="unit unit-horizontal unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="novi-icon icon icon-sm icon-primary material-icons-local_phone"></span>
                                </div>
                                <div class="unit__body">
                                    <ul class="contact-list">
                                        <li><a href="tel:#">+62 267 8630555</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">E-mail</p>
                            <div class="unit unit-horizontal unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="novi-icon icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                                <div class="unit__body">
                                    <ul class="contact-list">
                                        <li><a href="mailto:#">info@demolink.org</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="layout-bordered__aside-item">
                            <p class="heading-8">Address</p>
                            <div class="unit unit-horizontal unit-spacing-xxs">
                                <div class="unit__left"><span
                                        class="novi-icon icon icon-sm icon-primary material-icons-location_on"></span>
                                </div>
                                <div class="unit__body">
                                    <ul class="contact-list">
                                        <li><a href="#">PT HK-PATI
                                                Address : Jl. Inspeksi Tarum Barat (DEPAN PERURI), Desa Parung Mulya,
                                                Kecamatan Ciampel, Karawang 41361.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                <li><a class="icon novi-icon icon-xs icon-style-modern fa fa-globe"
                                        href="#"></a>
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

@extends('layouts.frontend')

@section('content')
    <style>
        .custom-table {
            background-color: white;
        }
    </style>
    <!-- Page-->
    <div class="page">

        <!-- Swiper -->
        <section>
            <div class="swiper-container swiper-slider swiper-slider_fullheight bg-gray-dark banner-slider"
                data-simulate-touch="false" data-loop="true" data-autoplay="5000"
                data-preset='{"title":"Slider 1","category":"sliders","reload":true,"id":"slider-1"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center" data-slide-bg="{{ asset('assets/images/slider/Slider1.png') }}">
                        <div class="swiper-slide-caption ">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">From start to finish </h1>
                                        <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="200">See how a 10-stories TOWER IS being built, in a
                                            time-lapse!</h5><a class="button button-primary"
                                            data-caption-animate="fadeInUpSmall" data-caption-delay="350"
                                            href="projects.html">See Our Recent Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center" data-slide-bg="{{ asset('assets/images/slider/Slider2.png') }}">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">Summer discounts</h1>
                                        <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="200">Summer discounts ON big construction projects!</h5>
                                        <a class="button button-primary" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="350" href="projects.html">See Our Recent Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center" data-slide-bg="{{ asset('assets/images/slider/Slider3.png') }}">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">You dream it, we build it</h1>
                                        <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="200">This year we took more complex constructions than
                                            ever before...</h5><a class="button button-primary"
                                            data-caption-animate="fadeInUpSmall" data-caption-delay="350"
                                            href="projects.html">See Our Recent Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper Pagination-->
                <div class="swiper-pagination"></div>
                <!-- Swiper Navigation-->
                <div class="swiper-button-prev linear-icon-chevron-left"></div>
                <div class="swiper-button-next linear-icon-chevron-right"></div>
            </div>
        </section>

        <!-- Our vision & Mission -->
        <section class="section-md bg-default novi-background text-center"
            data-preset="{&quot;title&quot;:&quot;Content Box 7&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-7&quot;}">
            <div class="container">
                <h4 class="heading-decorated ">Our vision & Mission</h4>
                <div class="row justify-content-md-center row-30 row-md-50 text-left">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <img src="../assets/img/hero/h1_hero.jpg" alt="">
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4>Vission</h4>
                        <h6>Our vision is to establish ourselves as the premier manufacturer of world-class, high-quality
                            automotive and metal parts in Indonesia, recognized for our commitment to excellence,
                            innovation, and customer satisfaction, while continuously striving to set new standards in the
                            industry and contribute to the sustainable growth of our community.</h6>
                    </div>
                </div>
                <div class="row justify-content-md-center row-30 row-md-50 text-left">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4>Mission</h4>
                        <table class="table table-borderless custom-table">
                            <tr>
                                <td>1.</td>
                                <td>
                                    <h6 style="font-style: normal;">Improving the welfare of stakeholders by prioritizing
                                        occupational health and safety
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>
                                    <h6 style="font-style: normal;">Increasing customer satisfaction through producing
                                        goods of the best quality, competitive
                                        prices and on-time delivery
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>
                                    <h6 style="font-style: normal;">Continuously develop the quality of human resources
                                    </h6>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>
                                    <h6 style="font-style: normal;">Always innovate with environmentally friendly technology
                                        to improve production quality
                                        and work systems in the company
                                    </h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <img src="../assets/img/hero/h3_hero.JPG" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- About us-->
        <section class="bg-gray-lighter novi-background object-wrap"
            data-preset='{"title":"Content Box 2","category":"content-boxes","reload":true,"id":"content-box-2"}'>
            <div class="section-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h4 class="heading-decorated">Our History</h4>
                            <p>Since then we've built hundreds of commercial, government and private buildings and
                                facilities. It may not sound like a lot, but if you estimate the manpower, working
                                hours, materials, planning and correlating that were all involved in completing each
                                separate project, then our productivity is immense! </p>
                            <h6>PT H-one Kogi Prima Auto Technologies Indonesia is a Japanese foreign investment company
                                (PMA) which operates in the automotive sector and is one of the vendors of PT HPM (Honda
                                Prospect Motor).</h6>
                            <p>HK-PATI began construction in June 2013, from a combination of 3 large companies, namely:
                                H-ONE Japan, Kogi Japan and Roda Prima Lancar. Currently it has started production and
                                serves large companies like Toyota and most other companies operating in the automotive
                                sector that require dies for their production processes. Supported by experts in their
                                fields and with strict quality control to maintain the best quality of production,
                                guaranteed customer satisfaction can be achieved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image"
                style="background-image: url(assets/img/hero/hkpati.JPG)"></div>
        </section>

        <!-- Our Services-->
        <section class="section-md bg-default novi-background text-center"
            data-preset='{"title":"Content Box 1","category":"content-boxes","reload":false,"id":"content-box-1"}'>
            <div class="container">
                <h4 class="heading-decorated">Our Components</h4>
                <div class="row row-50 justify-content-md-center justify-content-lg-start">
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler"></span>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Company
                                            Information</a></p>
                                    <p>We take our time on initial planning before any construction begins, to balance
                                        all the financial and efficiency issues beforehand...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-users"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Organitation
                                            Structure</a>
                                    </p>
                                    <p>We have a long list of professional contractors, whom our engineers and
                                        architects enjoy to work with on a majority of our projects!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-wall"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Management
                                            Philosophy</a></p>
                                    <p>Our customers love the pace/quality tempo that we show during each of the
                                        principal construction processes!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-apartment"></span>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Company History</a>
                                    </p>
                                    <p>Construction project management is essential. We're using the most time and
                                        iterations efficient life cycles methods for that.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-home4"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Business Process</a>
                                    </p>
                                    <p>Oftentimes physical and functional essence of any construction project needs to
                                        be represented digitally, in a 3D model format.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle -->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler2"></span>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">BOD Message</a></p>
                                    <p>If a project is not too complex, we may hire a designer-builder type of
                                        contractor, to make the longevity of the construction shorter</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Blurb minimal-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-database"></span>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">HK-PATI Network</a>
                                    </p>
                                    <p>It is vital for any contractor not to exceed the budget and that is why we pay
                                        utmost attention to cost containment.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- counters-->
        <section class="section-md novi-background bg-accent  bg-image bg-image-7  text-center"
            data-preset='{"title":"Counters 1","category":"counters","reload":true,"id":"counters-1"}'>
            <div class="container">
                <div class="row justify-content-md-center row-50">
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-apartment"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">11</div>
                            </div>
                            <p class="box-counter__title">YEARS OF EXPERIENCE</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-users"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">8</div>
                            </div>
                            <p class="box-counter__title">PARTNERS</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-users-plus"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">10000</div>
                                <h2>+</h2>
                            </div>
                            <p class="box-counter__title">Employees</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Posts-->
        <section class="section-md bg-default novi-background"
            data-preset='{"title":"Blog 3","category":"blog,carousel","reload":true,"id":"blog-3"}'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="heading-decorated">Recent News </h4>
                    </div>
                </div>
                <div class="row row-60">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel" data-items="1" data-sm-items="2" data-xl-items="3" data-dots="true"
                        data-nav="false" data-stage-padding="15" data-margin="30" data-mouse-drag="false"
                        data-loop="true" data-autoplay="true">
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-2-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Bike parts warehouse, DE</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>Delaware proved to be a very friendly place to work at… While invited there for
                                        completing a mid-sized warehouse for…</p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-1-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Future proofing hospitals</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>By improving the physical layout of hospitals and medical facilities, we can
                                        enhance and increase safety mechanisms, improve care, and…</p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-3-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Joy Hotel & Casino</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>This hotel & casino complex is our most recent completed building… The whole
                                        structure that took us 6 months to… </p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-1-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Future proofing hospitals</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>By improving the physical layout of hospitals and medical facilities, we can
                                        enhance and increase safety mechanisms, improve care, and…</p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-3-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Joy Hotel & Casino</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>This hotel & casino complex is our most recent completed building… The whole
                                        structure that took us 6 months to… </p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="../assets/images/home-post-2-418x315.jpg"
                                    alt="" width="418" height="315" />
                                <div class="post-classic-title">
                                    <h6><a href="blog-post.html">Bike parts warehouse, DE</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group"><a href="blog-post.html">
                                            <time datetime="2018">Jan.20, 2018</time></a><a class="meta-author"
                                            href="blog-post.html">by Brian Williamson</a></div>
                                </div>
                                <div class="post-classic-body">
                                    <p>Delaware proved to be a very friendly place to work at… While invited there for
                                        completing a mid-sized warehouse for…</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Client  -->
        <section class="section-md text-center bg-default novi-background"
            data-preset='{"title":"Clients 1","category":"clients","reload":false,"id":"clients-1"}'>

            <div class="container">
                <h4 class="heading-decorated">Our Clients</h4>
                <div class="row row-30">
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-1-126x102.png" alt="" width="126"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-2-134x102.png" alt="" width="134"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-3-132x102.png" alt="" width="132"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-4-126x102.png" alt="" width="126"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-5-138x102.png" alt="" width="138"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-6-143x102.png" alt="" width="143"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-7-109x102.png" alt="" width="109"
                                    height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img
                                    src="../assets/images/company-8-109x102.png" alt="" width="109"
                                    height="102" /></a></figure>
                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection

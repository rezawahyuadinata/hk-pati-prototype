@extends('layouts.app')

@section('content')
    <!-- Page-->
    <div class="page">

        <!-- Swiper -->
        <section>
            <div class="swiper-container swiper-slider swiper-slider_fullheight bg-gray-dark" data-simulate-touch="false"
                data-loop="true" data-autoplay="5000"
                data-preset='{"title":"Slider 1","category":"sliders","reload":true,"id":"slider-1"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center" data-slide-bg="images/slider-slide-1-1920x1080.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">Welcome to PT H-one Kogi Prima Auto
                                            Technologies Indonesia</h1>
                                        <a class="button button-primary" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="350" href="projects.html">See Our Company</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center" data-slide-bg="images/slider-slide-2-1920x1080.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">Summer discounts</h1>
                                        <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="200">Summer discounts ON big construction projects!</h5><a
                                            class="button button-primary" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="350" href="projects.html">See Our Recent Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center" data-slide-bg="images/slider-slide-3-1920x1080.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <h1 data-caption-animate="fadeInUpSmall">You dream it, we build it</h1>
                                        <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall"
                                            data-caption-delay="200">This year we took more complex constructions than ever
                                            before...</h5><a class="button button-primary"
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

        <section class="section-xs section-cta bg-image bg-image-7 text-center text-md-left"
            data-preset='{"title":"Call to Action 1","category":"call-to-action","reload":false,"id":"cta-1"}'>
            <div class="container">
                <div class="row row-30 justify-content-between align-items-center">
                    <div class="col-12 col-md-8">
                        <h4>Fast and reliable service for your project!</h4>
                    </div>
                    <div class="col-12 col-md-4 text-md-right"><a class="button button-primary" href="about.html">Read
                            more</a></div>
                </div>
            </div>
        </section>
        <!-- Our Services-->
        <section class="section-md bg-default novi-background text-center"
            data-preset='{"title":"Content Box 1","category":"content-boxes","reload":false,"id":"content-box-1"}'>
            <div class="container">
                <h4 class="heading-decorated">Our Services</h4>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">Pre-construction
                                            Services</a></p>
                                    <p>We take our time on initial planning before any construction begins, to balance all
                                        the financial and efficiency issues beforehand...</p>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">General
                                            Contracting</a></p>
                                    <p>We have a long list of professional contractors, whom our engineers and architects
                                        enjoy to work with on a majority of our projects!</p>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">Construction
                                            Services</a></p>
                                    <p>Our customers love the pace/quality tempo that we show during each of the principal
                                        construction processes!</p>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">Construction
                                            Management</a></p>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">Building Information
                                            Modeling (BIM)</a></p>
                                    <p>Oftentimes physical and functional essence of any construction project needs to be
                                        represented digitally, in a 3D model format.</p>
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
                                    <p class="blurb__title heading-6"><a href="single-service.html">Design-Build</a></p>
                                    <p>If a project is not too complex, we may hire a designer-builder type of contractor,
                                        to make the longevity of the construction shorter</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Blurb minimal-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-magic-wand"></span>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Cost Containment</a>
                                    </p>
                                    <p>It is vital for any contractor not to exceed the budget and that is why we pay utmost
                                        attention to cost containment.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Blurb minimal-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Quality Assurance</a>
                                    </p>
                                    <p>Every project we work on is checked for quality assurance to satisfy the needs of the
                                        modern society.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Blurb minimal-->
                        <article class="blurb blurb-minimal">
                            <div class="unit flex-row unit-spacing-md">
                                <div class="unit-left">
                                    <div class="blurb-minimal__icon"><span class="icon linear-icon-users2"></span></div>
                                </div>
                                <div class="unit-body">
                                    <p class="blurb__title heading-6"><a href="single-service.html">Equipment
                                            Installation</a></p>
                                    <p>Our professional team can install all kinds of equipment in the finished building as
                                        a part of post-construction services.</p>
                                </div>
                            </div>
                        </article>
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
                                facilities. It may not sound like a lot, but if you estimate the manpower, working hours,
                                materials, planning and correlating that were all involved in completing each separate
                                project, then our productivity is immense! </p>
                            <div class="row row-30">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Blurb minimal-->
                                    <article class="blurb blurb-minimal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left">
                                                <div class="blurb-minimal__icon"><span
                                                        class="icon linear-icon-menu3"></span></div>
                                            </div>
                                            <div class="unit-body">
                                                <p class="blurb__title heading-6"><a href="single-service.html">Years of
                                                        experience</a></p>
                                                <p>Our company has more than 50 years of experience in construction sphere.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Blurb minimal-->
                                    <article class="blurb blurb-minimal">
                                        <div class="unit flex-row unit-spacing-md">
                                            <div class="unit-left">
                                                <div class="blurb-minimal__icon"><span
                                                        class="icon linear-icon-users2"></span></div>
                                            </div>
                                            <div class="unit-body">
                                                <p class="blurb__title heading-6"><a href="single-service.html">Dedicated
                                                        team</a></p>
                                                <p>Our team is absolutely dedicated to successful construction project
                                                    completion.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <ul class="progress-list">
                                        <li>
                                            <!-- Linear progress bar-->
                                            <div class="progress-linear progress-linear-modern">
                                                <div class="progress-header">
                                                    <p>Construction</p><span class="progress-linear-counter">49</span>
                                                </div>
                                                <div class="progress-bar-linear-wrap">
                                                    <div class="progress-linear-bar"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Linear progress bar-->
                                            <div class="progress-linear progress-linear-modern">
                                                <div class="progress-header">
                                                    <p>Project Management</p><span
                                                        class="progress-linear-counter">29</span>
                                                </div>
                                                <div class="progress-bar-linear-wrap">
                                                    <div class="progress-linear-bar"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- Linear progress bar-->
                                            <div class="progress-linear progress-linear-modern">
                                                <div class="progress-header">
                                                    <p>3D Modeling</p><span class="progress-linear-counter">86</span>
                                                </div>
                                                <div class="progress-bar-linear-wrap">
                                                    <div class="progress-linear-bar"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image"
                style="background-image: url(images/bg-image-1.jpg)"></div>
        </section>
        <!-- running projects-->
        <section class="section-md bg-default novi-background text-center"
            data-preset='{"title":"Projects 1","category":"projects","reload":true,"id":"projects-1"}'>
            <div class="container">
                <h4 class="heading-decorated">Our Running Projects</h4>
                <div class="row row-50">
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-1-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-1-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Healthcare</a></h6>
                                <p>We can build any healthcare type of building. From a small private medical clinic to a
                                    full-fetched, new county hospital!</p><a class="button button-link"
                                    href="project-category.html">View Projects</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-2-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-2-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Educational</a></h6>
                                <p>Educational institutions can be much more creative, than your regular school or a college
                                    campus! Entrust us with building it and it will be mesmerizing!</p><a
                                    class="button button-link" href="project-category.html">View Projects</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-3-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-3-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Commercial</a></h6>
                                <p>It's probably the most diverse category of construction to work in. But we've got
                                    experience of building both small shopping malls and 50-stories high-rises!</p><a
                                    class="button button-link" href="project-category.html">View Projects</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-4-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-4-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Manufacturing /
                                        Industrial</a></h6>
                                <p>Building a manufacturing facility or a factory house can be much more challenging than
                                    building a cottage house. Trust us in such a complex task!</p><a
                                    class="button button-link" href="project-category.html">View Projects</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-5-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-5-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Data / Technology</a></h6>
                                <p>While building a headquarters building for an IT company is relatively easy, we've also
                                    got our hands at constructing more challenging types of IT related structures...</p><a
                                    class="button button-link" href="project-category.html">View Projects</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- Post project-->
                        <article class="post-project"><a class="img-thumbnail-variant-1"
                                href="images/project-6-652x491.jpg" data-lightgallery="item">
                                <figure><img class="post-project__image" src="images/project-6-652x491.jpg"
                                        alt="" width="652" height="491" />
                                </figure>
                                <div class="caption"><span class="icon icon-lg linear-icon-magnifier"></span></div>
                            </a>
                            <div class="post-project__body">
                                <h6 class="post-project__title"><a href="project-category.html">Government / Military</a>
                                </h6>
                                <p>The US military and States governments used our expertise and manpower to build numerous
                                    military-grade, cost-efficient and usage-practical buildings, all over the US and
                                    overseas...</p><a class="button button-link" href="project-category.html">View
                                    Projects</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- counters-->
        <section class="section-md novi-background bg-accent text-center"
            data-preset='{"title":"Counters 1","category":"counters","reload":true,"id":"counters-1"}'>
            <div class="container">
                <div class="row justify-content-md-center row-50">
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-coffee-cup"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">50</div>
                            </div>
                            <p class="box-counter__title">YEARS OF EXPERIENCE</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-cube"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">74</div>
                            </div>
                            <p class="box-counter__title">Projects Done</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-chevrons-expand-horizontal"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">15</div>
                            </div>
                            <p class="box-counter__title">PARTNERS</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- Box counter-->
                        <article class="box-counter">
                            <div class="box-counter__icon linear-icon-mustache-glasses"></div>
                            <div class="box-counter__wrap">
                                <div class="counter">147</div>
                            </div>
                            <p class="box-counter__title">Happy Customers</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class="position-relative section-lg bg-default novi-background text-center"
            data-preset='{"title":"Projects 2","category":"projects","reload":false,"id":"projects-2"}'>
            <!--{DEL LIVEDEMO TFDEMO GRANTER USERPACKAGE}-->
            <div class="toggle-custom fa fa-chevron-down" data-multitoggle=".toggle-custom-content"></div>
            <!--{DEL}-->
            <div class="container toggle-custom-content">
                <h4 class="heading-decorated">Our Projects</h4>
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-1-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>COMMERCIAL</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-1-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">COMMERCIAL</a>
                                        </h6>
                                        <p>It’s probably the most diverse category of construction to work in. But we’ve got
                                            experience…</p><a class="button button-link" href="project-category.html">View
                                            projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-2-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>CULTURAL / LIFESTYLE</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-2-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">CULTURAL /
                                                LIFESTYLE</a></h6>
                                        <p>Working on a socially important building, such as a park involves additional
                                            landscape construction expertise.…</p><a class="button button-link"
                                            href="project-category.html">View projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-3-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>DATA / TECHNOLOGY</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-3-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">DATA /
                                                TECHNOLOGY</a></h6>
                                        <p>While building a headquarters building for an IT company is relatively easy,
                                            we’ve also…</p><a class="button button-link" href="project-category.html">View
                                            projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-4-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>EDUCATIONAL</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-4-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">EDUCATIONAL</a>
                                        </h6>
                                        <p>Educational institutions can be much more creative than your regular school or a
                                            college campus!…</p><a class="button button-link"
                                            href="project-category.html">View projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-5-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>GOVERNMENT / MILITARY</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-5-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">GOVERNMENT /
                                                MILITARY</a></h6>
                                        <p>The US military and States governments used our expertise and manpower to build
                                            numerous military-grade…</p><a class="button button-link"
                                            href="project-category.html">View projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-6-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>HEALTHCARE</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-6-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">HEALTHCARE</a>
                                        </h6>
                                        <p>We can build any type of healthcare buildings. From a small private medical
                                            clinic to…</p><a class="button button-link" href="project-category.html">View
                                            projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-7-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>ENTERTAINMENT</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-7-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a
                                                href="project-category.html">ENTERTAINMENT</a></h6>
                                        <p>Working on a construction project for the entertainment sphere can be a real
                                            struggle but we know…</p><a class="button button-link"
                                            href="project-category.html">View projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-8-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>WAREHOUSE / LOGISTICS</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image"
                                            src="images/project-8-480x361.jpg" alt="" width="480"
                                            height="361" />
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="project-category.html">WAREHOUSE /
                                                LOGISTICS</a></h6>
                                        <p>While building a warehouse for an e-store is no easy feat itself, think about
                                            building…</p><a class="button button-link" href="project-category.html">View
                                            projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="section-md bg-accent bg-image text-center" style="background-image: url(images/bg-image-8.jpg)"
            data-preset='{"title":"Call to Action 2","category":"call-to-action","reload":false,"id":"cta-2"}'>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-9 col-xl-8">
                        <h4 class="heading-decorated">If you can envision it, then we can build it. <br>Tell us more about
                            your project!</h4><a class="button button-primary" href="contacts.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Executive managers-->
        <section class="section-md bg-default novi-background text-center"
            data-preset='{"title":"Team 1","category":"team","reload":false,"id":"team-1"}'>
            <div class="container">
                <h4 class="heading-decorated">Executive managers</h4>
                <div class="row row-50">
                    <div class="col-md-6 col-lg-4">
                        <!-- Thumb flat-->
                        <article class="thumb-flat"><img class="thumb-flat__image"
                                src="images/calvin-fitzerald-418x315.jpg" alt="" width="418"
                                height="315" />
                            <div class="thumb-flat__body">
                                <p class="heading-6"><a href="team-member-profile.html">Calvin Fitzgerald</a></p>
                                <p class="thumb-flat__subtitle">President</p>
                                <p>Calvin Fitzgerald is an established and well-respected expert in the construction
                                    industry. With more than 35 years of practical experience in the business, Calvin has
                                    built his career on bringing the most outlandish conceptual visions from blueprints to a
                                    street next to yours... His leadership skills cemented our dominating positions among
                                    our competitors.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Thumb flat-->
                        <article class="thumb-flat"><img class="thumb-flat__image" src="images/taylor-wilson-418x315.jpg"
                                alt="" width="418" height="315" />
                            <div class="thumb-flat__body">
                                <p class="heading-6"><a href="team-member-profile.html">Taylor Wilson</a></p>
                                <p class="thumb-flat__subtitle">Chief Executive Officer</p>
                                <p>Taylor's been involved in the construction business since the 1970's... His profound
                                    experience in building miscellaneous types of projects and his innovative mindset makes
                                    him the leading force in our company. The BIM and Db methods that he implemented are now
                                    the lynchpins of our business operations with all of our clients...</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Thumb flat-->
                        <article class="thumb-flat"> <img class="thumb-flat__image" src="images/josh-wagner-418x315.jpg"
                                alt="" width="418" height="315" />
                            <div class="thumb-flat__body">
                                <p class="heading-6"><a href="team-member-profile.html">Josh Wagner</a></p>
                                <p class="thumb-flat__subtitle">Chief Design Officer</p>
                                <p>Josh leads our creative team of designers and engineers...His proven ability to manage
                                    the most complex projects and bring the craziest concepts to life is what makes him as
                                    efficient as he is. Together, this creative team can be the launchpad of any project,
                                    giving it a head start at the earliest stages of the construction project's planning.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- get a quote-->
        <section class="bg-gray-lighter novi-background object-wrap"
            data-preset='{"title":"Contact Form 1","category":"forms","reload":true,"id":"forms-1"}'>
            <div class="section-lg">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-5">
                            <h4 class="heading-decorated">Get a Quote</h4>
                            <!-- RD Mailform-->
                            <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global"
                                data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name">
                                    <label class="form-label" for="contact-name">Your name</label>
                                </div>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email">
                                    <label class="form-label" for="contact-email">Your e-mail</label>
                                </div>
                                <div class="form-wrap">
                                    <textarea class="form-input" id="contact-message" name="message"></textarea>
                                    <label class="form-label" for="contact-message">Your message</label>
                                </div>
                                <button class="button button-primary" type="submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image"
                style="background-image: url(images/bg-image-3.jpg)"></div>
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
                            <article class="post-classic post-minimal"><img src="images/home-post-2-418x315.jpg"
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
                            <article class="post-classic post-minimal"><img src="images/home-post-1-418x315.jpg"
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
                                    <p>By improving the physical layout of hospitals and medical facilities, we can enhance
                                        and increase safety mechanisms, improve care, and…</p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="images/home-post-3-418x315.jpg"
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
                            <article class="post-classic post-minimal"><img src="images/home-post-1-418x315.jpg"
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
                                    <p>By improving the physical layout of hospitals and medical facilities, we can enhance
                                        and increase safety mechanisms, improve care, and…</p>
                                </div>
                            </article>
                        </div>
                        <div class="owl-item">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal"><img src="images/home-post-3-418x315.jpg"
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
                            <article class="post-classic post-minimal"><img src="images/home-post-2-418x315.jpg"
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

        <section class="section-lg bg-image context-dark text-center" style="background-image: url(images/bg-image-2.jpg)"
            data-preset='{"title":"Testimonials 1","category":"testimonials","reload":true,"id":"testimonials-1"}'>
            <div class="container">
                <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30"
                    data-dots="true" data-nav="true" data-autoplay="true">
                    <div class="item">
                        <!-- Quote default-->
                        <div class="quote-default">
                            <div class="quote-default__image"><img src="images/deborah-quagmire-120x120.jpg"
                                    alt="" width="120" height="120" />
                            </div>
                            <div class="quote-default__text">
                                <p class="q">Your versatility and experience with complex construction enabled your
                                    team to meet the aggressive schedule while achieving our high quality and safety
                                    standards. I appreciate all work you have completed on our project.</p>
                            </div>
                            <p class="quote-default__cite">Jane Smith</p>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Quote default-->
                        <div class="quote-default">
                            <div class="quote-default__image"><img src="images/benedict-arnold-120x120.jpg"
                                    alt="" width="120" height="120" />
                            </div>
                            <div class="quote-default__text">
                                <p class="q">When we needed a design and construction specialist, this company was
                                    there for us. From the beginning, they knew how to implement our ideas, and we
                                    appreciate it a lot. If you are still looking for a reliable construction company, they
                                    are what you need!</p>
                            </div>
                            <p class="quote-default__cite">James Wilson</p>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Quote default-->
                        <div class="quote-default">
                            <div class="quote-default__image"><img src="images/testimonials-3-120x120.jpg" alt=""
                                    width="120" height="120" />
                            </div>
                            <div class="quote-default__text">
                                <p class="q">For 22 years, we have partnered with this company on a variety of
                                    projects, and each time they completed everything on time and on budget. Our
                                    relationship is built on quality and trust. We recommend them for any job—big or small.
                                </p>
                            </div>
                            <p class="quote-default__cite">Sam Lee </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-md text-center bg-default novi-background"
            data-preset='{"title":"Clients 1","category":"clients","reload":false,"id":"clients-1"}'>
            <div class="container">
                <h4 class="heading-decorated">Our Clients</h4>
                <div class="row row-30">
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-1-126x102.png"
                                    alt="" width="126" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-2-134x102.png"
                                    alt="" width="134" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-3-132x102.png"
                                    alt="" width="132" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-4-126x102.png"
                                    alt="" width="126" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-5-138x102.png"
                                    alt="" width="138" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-6-143x102.png"
                                    alt="" width="143" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-7-109x102.png"
                                    alt="" width="109" height="102" /></a></figure>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <figure class="box-icon-image"><a href="#"><img src="images/company-8-109x102.png"
                                    alt="" width="109" height="102" /></a></figure>
                    </div>
                </div>
            </div>
        </section>

    </div>
   
@endsection

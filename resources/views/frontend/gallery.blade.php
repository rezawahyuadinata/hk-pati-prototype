@extends('layouts.frontend')

@section('content')
    <section class="section parallax-container parallax-disabled" data-parallax-img="images/parallax-1.jpg"
        style="background-image: url(&quot;images/parallax-1.jpg&quot;);">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated">Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page">

        <section class="section section-md bg-default novi-background oh text-center"
            data-preset="{&quot;title&quot;:&quot;Masonry Gallery&quot;,&quot;category&quot;:&quot;gallery&quot;,&quot;reload&quot;:true,&quot;id&quot;:&quot;masonry-gallery&quot;}">
            <div class="container isotope-wrap">
                <!-- Isotope Filters-->
                <div class="isotope-filters isotope-filters-modern">
                    <button class="isotope-filters-toggle button button-sm button-primary"
                        data-multitoggle="#isotope-filters-2">Filter<span class="caret"></span></button>
                    <ul class="isotope-filters-list isotope-filters-list-modern" id="isotope-filters-2">
                        <li><a class="active" data-isotope-filter="*" href="#">All Types</a></li>
                        <li><a data-isotope-filter="Type 1" href="#">Type 1 </a></li>
                        <li><a data-isotope-filter="Type 2" href="#">Type 2</a></li>
                        <li><a data-isotope-filter="Type 3" href="#">Type 3 </a></li>
                    </ul>
                </div>
                <div class="isotope isotope-modern row row-30 row-xxl-50" data-isotope-layout="masonry"
                    data-lightgallery="group" style="position: relative; height: 943.204px;">
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 3"
                        style="position: absolute; left: 0px; top: 0px;"><a class="thumbnail-creative thumbnail-creative-1"
                            href="images/gallery-1-original.jpg" data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-1-420x530.jpg" alt="" width="420" height="530">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2"
                        style="position: absolute; left: 466px; top: 0px;"><a class="thumbnail-creative"
                            href="images/gallery-2-original.jpg" data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-2-420x320.jpg" alt="" width="420" height="320">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1"
                        style="position: absolute; left: 933px; top: 0px;"><a
                            class="thumbnail-creative thumbnail-creative-1" href="images/gallery-3-original.jpg"
                            data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-3-420x530.jpg" alt="" width="420" height="530">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 3"
                        style="position: absolute; left: 466px; top: 367px;"><a
                            class="thumbnail-creative thumbnail-creative-1" href="images/gallery-4-original.jpg"
                            data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-4-420x530.jpg" alt="" width="420" height="530">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2"
                        style="position: absolute; left: 0px; top: 575px;"><a class="thumbnail-creative"
                            href="images/gallery-5-original.jpg" data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-5-420x320.jpg" alt="" width="420" height="320">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                    <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1"
                        style="position: absolute; left: 933px; top: 575px;"><a class="thumbnail-creative"
                            href="images/gallery-6-original.jpg" data-lightgallery="item">
                            <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                                    src="images/gallery-6-420x320.jpg" alt="" width="420" height="320">
                            </figure>
                            <div class="thumbnail-creative-overlay"></div>
                        </a></div>
                </div>
            </div>
        </section>
    </div>
@endsection

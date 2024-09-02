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
                                <h2 class="heading-decorated">Governance</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page">

    </div>
    <section class="section section-md section-bottom-0 oh bg-default novi-background text-center isotope-wrap"
        data-preset="{&quot;title&quot;:&quot;Fullwidth Gallery&quot;,&quot;category&quot;:&quot;gallery&quot;,&quot;reload&quot;:true,&quot;id&quot;:&quot;gallery-fullwidth&quot;}">
        <div class="isotope isotope-modern row no-gutters" data-isotope-layout="masonry" data-lightgallery="group"
            style="position: relative; height: 600.75px;">
            <div class="col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Type 3"
                style="position: absolute; left: 0px; top: 0px;"><a class="thumbnail-creative"
                    href="images/gallery-1-original.jpg">
                    <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                            src="images/gallery-1-480x360.jpg" alt="" width="480" height="360">
                    </figure>
                    <div class="thumbnail-creative-overlay"></div>
                </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Type 2"
                style="position: absolute; left: 394px; top: 0px;"><a class="thumbnail-creative"
                    href="images/gallery-2-original.jpg">
                    <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                            src="images/gallery-2-480x360.jpg" alt="" width="480" height="360">
                    </figure>
                    <div class="thumbnail-creative-overlay"></div>
                </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Type 1"
                style="position: absolute; left: 788px; top: 0px;"><a class="thumbnail-creative"
                    href="images/gallery-3-original.jpg">
                    <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                            src="images/gallery-3-480x360.jpg" alt="" width="480" height="360">
                    </figure>
                    <div class="thumbnail-creative-overlay"></div>
                </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Type 3"
                style="position: absolute; left: 1182px; top: 0px;"><a class="thumbnail-creative"
                    href="images/gallery-4-original.jpg">
                    <figure class="thumbnail-creative-media"><img class="thumbnail-creative-image"
                            src="images/gallery-4-480x360.jpg" alt="" width="480" height="360">
                    </figure>
                    <div class="thumbnail-creative-overlay"></div>
                </a></div>
        </div>
    </section>
@endsection

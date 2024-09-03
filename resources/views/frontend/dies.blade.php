@extends('layouts.frontend')

@section('content')
    <style>
        .fixed-size-img {
            max-width: 652px;
            max-height: 491px;
        }

        .spec-item {
            margin-bottom: 10px;
        }

        .spec-item::before {
            content: "• ";
            font-weight: bold;
        }

        .spec-title {
            font-weight: bold;
        }
    </style>
    <section class="section parallax-container parallax-disabled" data-parallax-img="images/parallax-1.jpg"
        style="background-image: url(&quot;images/parallax-1.jpg&quot;);">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated">Dies Business</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page">
        <section class="section-md novi-background bg-default"
            data-preset="{&quot;title&quot;:&quot;Content Box 5&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-5&quot;}">
            <div class="container">
                <div class="row justify-content-md-center row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">Die Design & CAD/CAM Process</h4>
                        <p class="heading-6">Designing & Data Process</p>
                        <p>The 3-dimensional designing is that it is easy to understand the shape of parts, and productifity
                            can be cheked virtually . 3-dimesional designing data is utilized in forming simulation, robot
                            simulation, and dies data generation, etc. contributing greatly to speed up the product
                            Development</p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" class="fixed-size-img">
                    </div>
                </div>
            </div>

        </section>

        <section class="section-md bg-default novi-background"
            data-preset="{&quot;title&quot;:&quot;Content Box 6&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-6&quot;}">
            <div class="container">
                <div class="row justify-content-md-center flex-xl-row-reverse row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">NC Machining</h4>
                        <p class="heading-6">NC Machining</p>
                        <p>HK-PATI has been actively using simulation technologies for welding as well to enable mass
                            production of newly designed parts in a shorter time. Our accumulated know-how and technical
                            data are referenced to plan and construct production lines with high efficiency and accuracy.
                            Product design data are also shared by and linked between the die designing and production
                            process and the welding line simulation and robot programming process, so that the lead-time to
                            completion of respective processes is shortened.</p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" class="fixed-size-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-md novi-background bg-default"
            data-preset="{&quot;title&quot;:&quot;Content Box 5&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-5&quot;}">
            <div class="container">
                <div class="row justify-content-md-center row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">Die Making Plant</h4>
                        <p class="heading-6">Machining Process until trial machine</p>
                        <p>PT HK-PATI fully utilized digital technique of designing product for the manufacture of dies to
                            efficiency produce high precision to obtain cost. Our supply capacity increases accuracy obtain
                            cost.</p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" class="fixed-size-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-md bg-default novi-background"
            data-preset="{&quot;title&quot;:&quot;Content Box 6&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-6&quot;}">
            <div class="container">
                <div class="row justify-content-md-center flex-xl-row-reverse row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">Assembling Process</h4>
                        <p class="heading-6">Assembling Process</p>
                        <p>Hactively proposes products that are achieved by break-through technologies such as super-high
                            strength steel stamping, a new production technique called 3DQ, and metal separator that is a
                            new environmental product.</p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" class="fixed-size-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-md novi-background bg-default"
            data-preset="{&quot;title&quot;:&quot;Content Box 5&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-5&quot;}">
            <div class="container">
                <div class="row justify-content-md-center row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">Final Inspection & Finishing</h4>
                        <p class="heading-6">Inspection & Finishing Process</p>
                        <p>At Hactively, we are committed to revolutionizing the automotive and metal parts manufacturing
                            industry through innovative engineering processes and cutting-edge technologies. Our dedication
                            to quality and sustainability drives us to continuously push the boundaries of what is possible.
                            This document outlines our advanced engineering processes and the breakthrough technologies that
                            set us apart.</p>

                        <p class="heading-6 pt-2">Finished Die's Product</p>
                        <p></p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" class="fixed-size-img">
                    </div>
                </div>
            </div>

        </section>
    </div>
    <section class="section section-md section-bottom-0 oh bg-default novi-background text-center isotope-wrap"
        data-preset="{&quot;title&quot;:&quot;Fullwidth Gallery&quot;,&quot;category&quot;:&quot;gallery&quot;,&quot;reload&quot;:true,&quot;id&quot;:&quot;gallery-fullwidth&quot;}">
        <div class="container">
            <div class="row justify-content-md-center row-30 row-md-50">
                <div class="col-md-11 col-lg-10 col-xl-6">
                    <h4 class="heading-decorated">Others Menu</h4>
                </div>
            </div>
        </div>
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

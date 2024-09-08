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
    <section class="section parallax-container parallax-disabled"
        data-parallax-img="{{ asset('assets/images/banner/company_overview.png') }}"
        style="background-image: url(&quot;images/parallax-1.jpg&quot;);">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content banner-header">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated" style="color: white">Dies Business</h2>
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
@endsection

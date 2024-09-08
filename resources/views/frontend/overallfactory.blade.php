@extends('layouts.frontend')

@section('content')
    <section class="section parallax-container parallax-disabled"
        data-parallax-img="{{ asset('assets/images/banner/company_overview.png') }}">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content banner-header">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated" style="color: white">Overall Factory Business</h2>
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
                        <h4 class="heading-decorated">How HK-PATI Frames Are Made ?</h4>
                        <p>At HK-PATI, we pride ourselves on our extensive network of professional contractors, with whom
                            our engineers and architects collaborate on the majority of our projects. Our flagship products
                            are automobile frames, and our business activities begin with joint research on body frames in
                            collaboration with the design departments of our customer car manufacturers.The design data
                            created from this collaboration is utilized to conduct digital engineering during the
                            development phase, allowing us to produce high-precision dies and construct high-efficiency
                            welding lines in a short period. During the production phase, our equipment is operated stably
                            to form complex parts with intricate shapes at high quality.</p>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img
                            src="{{ asset('frontend/assets/img/blog/partdivisionnew.jpg') }}" alt="" width="652"
                            height="491">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

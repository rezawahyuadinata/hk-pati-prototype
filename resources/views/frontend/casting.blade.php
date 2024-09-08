@extends('layouts.frontend')

@section('content')
    <section class="section parallax-container parallax-disabled"
        data-parallax-img="{{ asset('assets/images/banner/company_overview.png') }}"
        style="background-image: url(&quot;images/parallax-1.jpg&quot;);">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content banner-header">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated" style="color: white">Casting Business</h2>
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
                        <h4 class="heading-decorated">FMC: 3D Digital Design (Model)</h4>
                        <p class="heading-6">Designing Process & Modeling</p>
                        <p>Stamping simulation is performed before die production to confirm that parts can be stamped as
                            intended by the product design data and that no cracks and wrinkles that may affect product
                            strength occur. During simulation, the product design data and our internal criteria defined by
                            our accumulated know-how are utilized to digitally guarantee the product accuracy before
                            physically producing the die. Stamping analysis Our die production process employs simulation
                            for springback analysis (NOTE1) and virtual finetuning (NOTE2) to shorten the die production
                            lead-time and enable the swift transition to mass production.</p>
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
                        <h4 class="heading-decorated">Material Analyst</h4>
                        <p class="heading-6">Quality Assurance to be trusted</p>
                        <p>Supported by experts in the field and with the quality control is tight enough to keep the
                            production quality will be the best, then guarantee customer satisfaction can be archived.
                        </p>
                        <p>
                            Casting Grade that are produced in PT HK-PATI is FCD, FC, TGC, Production capacity is equivalent
                            80,000kg per once</p>

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
                        <h4 class="heading-decorated">Melting Furnace</h4>
                        <p class="heading-6">Melting Furnace</p>
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

        <section class="section-md bg-default novi-background"
            data-preset="{&quot;title&quot;:&quot;Content Box 6&quot;,&quot;category&quot;:&quot;content-boxes&quot;,&quot;reload&quot;:false,&quot;id&quot;:&quot;content-box-6&quot;}">
            <div class="container">
                <div class="row justify-content-md-center flex-xl-row-reverse row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated">Pouring</h4>
                        <p class="heading-6">Pouring Process</p>
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
                        <h4 class="heading-decorated">Finishing & Delivery</h4>
                        <p class="heading-6">Finished Casting</p>
                        <p>Hactively proposes products that are achieved by break-through technologies such as super-high
                            strength steel stamping, a new production technique called 3DQ, and metal separator that is a
                            new environmental product.</p>

                        <p class="heading-6 pt-2">Delivery Process Casting</p>
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

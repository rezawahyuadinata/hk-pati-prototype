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
                                <h2 class="heading-decorated" style="color: white">Our Facilities</h2>
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
                    <h4 class="heading-decorated">Material: The Foundation of Excellence</h4>
                    <table class="table table-bordered">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

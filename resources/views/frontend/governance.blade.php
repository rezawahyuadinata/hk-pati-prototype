@extends('layouts.frontend')

@section('content')
    <style>
        /* public/css/custom.css */
        .custom-banner {
            background-color: #f0f0f0;
            /* Warna background */
            border: 2px solid #ccc;
            /* Border */
            padding: 20px;
            /* Padding */
            text-align: center;
            /* Teks rata tengah */
            margin: 50px auto;
            /* Margin auto untuk center */
            width: 80%;
            /* Lebar banner */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow */
        }

        .custom-banner-title {
            font-size: 2.5em;
            /* Ukuran font title */
            color: #333;
            /* Warna font title */
            margin-bottom: 10px;
            /* Margin bawah title */
        }

        .custom-banner-description {
            font-size: 1.2em;
            /* Ukuran font deskripsi */
            color: #666;
            /* Warna font deskripsi */
        }
    </style>

    <section class="section parallax-container parallax-disabled"
        data-parallax-img="{{ asset('assets/images/banner/company_overview.png') }}">
        <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
                <div class="parallax-header__content banner-header">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2 class="heading-decorated" style="color: white">Governance</h2>
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
            <div class="custom-banner">
                <h1 class="custom-banner-title">Coming Soon</h1>
                <p class="custom-banner-description">This feature is under development and will be available soon.</p>
            </div>
        </section>

    </div>
@endsection

@extends('layouts.frontend')

@section('content')
    <style>
        #map {
            height: 600px
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
                                <h2 class="heading-decorated">Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page" style="min-height: 20vh">
        <section class="section section-md bg-default novi-background">
            <div class="container">
                <h4 class="heading-decorated">Maps</h4>
                <br>
                <div id="map"></div>
            </div>
        </section>
        <section class="section section-md bg-default novi-background"
            data-preset="{&quot;title&quot;:&quot;Forms 3&quot;,&quot;category&quot;:&quot;forms&quot;,&quot;reload&quot;:true,&quot;id&quot;:&quot;forms-3&quot;}">
            <div class="container">
                <div class="row row-50">
                    <div class="col-md-5 col-lg-4">
                        <h4 class="heading-decorated">Contact Details</h4>
                        <ul class="list-sm contact-info">
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Address</dt>
                                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Phones</dt>
                                    <dd>
                                        <ul class="list-semicolon">
                                            <li><a href="tel:#">(800) 123-0045</a></li>
                                            <li><a href="tel:#">(800) 123-0045</a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>We are open</dt>
                                    <dd>Mn-Fr: 10 am-8 pm</dd>
                                </dl>
                            </li>
                            <li>
                                <ul class="list-inline-sm">
                                    <li><a class="icon-sm fa-facebook novi-icon icon" href="#"></a></li>
                                    <li><a class="icon-sm fa-twitter novi-icon icon" href="#"></a></li>
                                    <li><a class="icon-sm fa-google-plus novi-icon icon" href="#"></a></li>
                                    <li><a class="icon-sm fa-vimeo novi-icon icon" href="#"></a></li>
                                    <li><a class="icon-sm fa-youtube novi-icon icon" href="#"></a></li>
                                    <li><a class="icon-sm fa-pinterest-p novi-icon icon" href="#"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="heading-decorated">Get in Touch</h4>
                        <!-- RD Mailform-->
                        <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global"
                            data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                            <div class="form-wrap form-wrap_icon linear-icon-man">
                                <input class="form-input form-control-has-validation" id="contact-name" type="text"
                                    name="name" data-constraints=""><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-name">Your name</label>
                            </div>
                            <div class="form-wrap form-wrap_icon linear-icon-envelope">
                                <input class="form-input form-control-has-validation" id="contact-email" type="email"
                                    name="email" data-constraints="@Email "><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-email">Your e-mail</label>
                            </div>
                            <div class="form-wrap form-wrap_icon linear-icon-feather">
                                <textarea class="form-input form-control-has-validation" id="contact-message" name="message" data-constraints=""></textarea><span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="contact-message">Your message</label>
                            </div>
                            <button class="button button-primary" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

    <script>
        // Initialize the map and set its view to the chosen geographical coordinates and zoom level
        var map = L.map('map').setView([-6.366670, 107.326719], 13);

        // Load and display tile layer on the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map at the specified coordinates
        var marker = L.marker([-6.366670, 107.326719]).addTo(map);

        // Optionally, add a popup to the marker
        marker.bindPopup(
            "<b>HK-Pati</b><br>Jl. Inspeksi Tarum Barat (DEPAN PERURI), Desa Parung Mulya, Kecamatan Ciampel, Karawang. 41363"
        ).openPopup();
    </script>
@endsection

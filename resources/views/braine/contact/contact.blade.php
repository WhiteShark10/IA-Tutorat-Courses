@extends('base')
@section('title', 'Nous contacter')
@section('content')
    <section class="page-title">
        <div class="page-title-icon" style="background-image:url(assets/images/icons/page-title_icon-1.png)">
        </div>
        <div class="page-title-icon-two" style="background-image:url(assets/images/icons/page-title_icon-2.png)">
        </div>
        <div class="page-title-shadow" style="background-image:url(assets/images/background/page-title-1.png)">
        </div>
        <div class="page-title-shadow_two" style="background-image:url(assets/images/background/page-title-2.png)"></div>
        <div class="auto-container">
            <h2>Nous contacter</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('index') }}">Accueil</a></li>
                <li>Nous contacter</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Block One -->
                <div class="info-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="info-block_one-inner">
                        <div class="info-block_one-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <h4>Appelez-nous au</h4>
                        <a href="tel:+415-864-8728">+415-864-8728</a> <br>
                        <a href="tel:+415-864-8729">+415-864-8729</a>
                    </div>
                </div>

                <!-- Info Block One -->
                <div class="info-block_one active col-lg-4 col-md-6 col-sm-12">
                    <div class="info-block_one-inner">
                        <div class="info-block_one-icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <h4>Envoyez-nous un e-mail</h4>
                        <a href="mailto:">support@braine.com</a> <br>
                        <a href="mailto:">contact@braine.com</a>
                    </div>
                </div>

                <!-- Info Block One -->
                <div class="info-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="info-block_one-inner">
                        <div class="info-block_one-icon">
                            <i class="icon-map"></i>
                        </div>
                        <h4>Notre emplacement</h4>
                        <div class="text">1426 Center StreetBend, OR <br> 97702, California, USA</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Faq One -->

    <!-- Team Detail Form -->
    <section class="team-detail_form">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Contactez-moi</div>
                        <h2 class="sec-title_heading">Contactez-nous pour obtenir de l'aide</h2>
                        <div class="sec-title_text">Lorem ipsum dolor sit amet consectetur adipiscing <br> elit Ut
                            et massa Aliquam in hendrerit urna.</div>
                    </div>
                    <!-- Social Box -->
                    <div class="contact-social_box">
                        <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="default-form contact-form">
                        <form method="post" action="#">
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="name" value="" placeholder="Nom" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" value="" placeholder="Numéro" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <select name="country" class="custom-select-box">
                                        <option>Selectionner un service</option>
                                        <option>Service 01</option>
                                        <option>Service 02</option>
                                        <option>Service 03</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea class="" name="message" placeholder="Sujet*"></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="button" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Envoyer</span>
                                            <span class="text-two">Envoyer</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Detail Form -->

    <!-- Map One -->
    <section class="map-one">
        <div class="auto-container">
            <div class="map-one_map">
                <iframe width="820" height="560" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=18&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>
    </section>
@endsection

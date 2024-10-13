<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="txt-loading">
                            <span data-text-preloader="L" class="letters-loading">L</span>
                            <span data-text-preloader="O" class="letters-loading">O</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="D" class="letters-loading">D</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="G" class="letters-loading">G</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">

                            <div class="logo-box">
                                <div class="logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('images/logo.svg') }}" alt="" title="">
                                    </a>
                                </div>
                            </div>

                            <div class="nav-outer d-flex flex-wrap">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown"><a href="#">Accueil</a>
                                                <ul>
                                                    <li><a href="{{ route('index') }}#slider1">EDUC-AI c'est quoi?</a>
                                                    </li>
                                                    <li><a href="{{ route('index') }}#slider2">Nos formations</a></li>
                                                    <li><a href="{{ route('index') }}#slider3">À propos de nous</a>
                                                    </li>
                                                    <li><a href="{{ route('index') }}#slider4">Raison pour choisir
                                                            notre plateforme</a>
                                                    </li>
                                                    <li><a href="{{ route('index') }}#slider5">À propos du Tutorat
                                                            Virtuel</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('index') }}#slider6">Témoignages</a></li>
                                            <li><a href="{{ route('index') }}#slider7">Actualités</a></li>
                                            {{-- <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="pricing.html">Price</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="reset.html">Forgot password</a></li>
                                                    <li class="dropdown"><a href="#">Team</a>
                                                        <ul>
                                                            <li><a href="team.html">Team</a></li>
                                                            <li><a href="team-detail.html">Team detail</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="service-detail.html">Services detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog grid</a></li>
                                                    <li><a href="blog-classic.html">Blog classic</a></li>
                                                    <li><a href="news-detail.html">Blog detail</a></li>
                                                    <li><a href="not-found.html">Not found</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{ route('braine.contact.contact') }}">Contact</a></li>
                                            <li><a href="{{ route('index') }}#slider9">FAQ</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Main Menu End-->
                            <div class="outer-box d-flex align-items-center flex-wrap">

                                <!-- Language DropDown -->
                                <div class="language-dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="flag"><img src="{{ asset('images/icons/flag.png') }}"
                                                alt="" /></span> <span
                                            class="fa-solid fa-angle-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="flag">
                                                    <img src="{{ asset('images/icons/flag.png') }}" alt="" />
                                                </span> Anglais
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="flag">
                                                    <img src="{{ asset('images/icons/france.png') }}"
                                                        alt="" />
                                                </span> Français
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Button Box -->
                                <div class="main-header_buttons">
                                    <a href="{{ route('braine.con_insc.login') }}"
                                        class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Se connecter</span>
                                            <span class="text-two">Se connecter</span>
                                        </span>
                                    </a>
                                    <a href="{{ route('braine.con_insc.register') }}"
                                        class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">S'enregistrer</span>
                                            <span class="text-two">S'enregistrer</span>
                                        </span>
                                    </a>
                                </div>

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-menu-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6l16 0" />
                                        <path d="M4 12l16 0" />
                                        <path d="M4 18l16 0" />
                                    </svg>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Lower-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa-solid fa-xmark fa-fw"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('images/mobile-logo.svg') }}" alt="" title="">
                        </a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="footer_pattern"
                style="background-image: url({{ asset('images/background/footer-pattern.png') }})">
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <!-- Widgets Section -->
                    <div class="widgets-section">
                        <div class="row clearfix">

                            <!-- Big Column -->
                            <div class="big-column col-lg-5 col-md-12 col-sm-12">
                                <div class="footer-newsletter">
                                    <h5 class="footer-title">Newsletter</h5>
                                    <div class="footer-newsletter_text">Lorem ipsum dolor sit amet consectetur
                                        adipiscing vitae mattis tellus. Nullam quis mattis.</div>
                                    <div class="newsletter-box">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <span class="icon fa-regular fa-envelope fa-fw"></span>
                                                <input type="email" name="search-field" value=""
                                                    placeholder="Entrer votre email" required>
                                                <button type="submit" class="template-btn btn-style-one">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">S'abonner</span>
                                                        <span class="text-two">S'abonner</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Big Column -->
                            <div class="big-column col-lg-7 col-md-12 col-sm-12">
                                <div class="footer-lists_outer">
                                    <div class="row clearfix">
                                        <!-- Column -->
                                        <div class="column col-lg-5 col-md-4 col-sm-6">
                                            <h5 class="footer-title">Services</h5>
                                            <ul class="footer-pages_list">
                                                <li><a href="#">AI-powered copywriting</a></li>
                                                <li><a href="#">Blog post generation</a></li>
                                                <li><a href="#">Social media content</a></li>
                                                <li><a href="#">Product descriptions</a></li>
                                                <li><a href="#">Email campaigns</a></li>
                                                <li><a href="#">Copy writings</a></li>
                                                <li><a href="#">SEO specialist</a></li>
                                            </ul>
                                        </div>
                                        <!-- Column -->
                                        <div class="column col-lg-3 col-md-4 col-sm-6">
                                            <h5 class="footer-title">resources</h5>
                                            <ul class="footer-pages_list">
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">FAQs</a></li>
                                                <li><a href="#">Help center</a></li>
                                                <li><a href="#">case studies</a></li>
                                                <li><a href="#">whitepapers</a></li>
                                                <li><a href="#">Services</a></li>
                                            </ul>
                                        </div>
                                        <!-- Column -->
                                        <div class="column col-lg-4 col-md-4 col-sm-6">
                                            <h5 class="footer-title">about us</h5>
                                            <ul class="footer-pages_list">
                                                <li><a href="#">Our story</a></li>
                                                <li><a href="#">Team</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Testimonials</a></li>
                                                <li><a href="#">Error 404</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                        <div class="footer-logo"><a href="index.html"><img src="{{ asset('images/logo.svg') }}"
                                    alt="" title=""></a>
                        </div>
                        <div class="footer-copyright">&copy; 2024 <a href="{{ route('index') }}">EDUC-AI.</a> Tous
                            droits
                            réservés.</div>
                        <!-- Social Box -->
                        <div class="footer-social_box">
                            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- End PageWrapper -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/backtotop.js') }}"></script>
    <script src="{{ asset('js/odometer.js') }}"></script>
    <script src="{{ asset('js/parallax-scroll.js') }}"></script>

    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/SplitText.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/ScrollSmoother.min.js') }}">
        < /scri <
        script src = "{{ asset('js/touchspin.js') }}" >
    </script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/nav-tool.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/element-in-view.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>

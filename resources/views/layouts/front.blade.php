<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="@yield('meta-keywords')" />
        <meta name="description" content="@yield('meta-description')">
        <meta name="author" content="https://bimetakarnusa.id/">
        
        <meta property="og:title" content="PT Bimeta Karnusa">
        <meta property="og:description" content="Bimeta Karnusa merupakan pabrik kardus yang menjual berbagai jenis kardus berdasarkan kebutuhan, dengan kualitas dan harga terbaik.">
        <meta property="og:image" content="{{asset('front/img/logo-bimeta.png')}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://bimetakarnusa.id">
        <meta name="google-site-verification" content="UAUay9R_x8eVwn3lktHNZJyZDg9zoBBajEArMqI-2l4" />
        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/vendor/themify/themify.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/vendor/scrollbar/scrollbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/vendor/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/vendor/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('front/css/global/global.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('front/img/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('front/img/apple-touch-icon.png')}}">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="/" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="{{asset('front/img/logo-bimeta.png')}}" height="50px" width="70px" alt="Megakit Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="{{asset('front/img/logo-bimeta.png')}}" height="50px" width="70px"alt="Megakit Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{route('beranda')}}">Beranda</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{route('companyProfile')}}">Profil Perusahaan</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{route('product')}}">Produk</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{route('contact')}}">Hubungi Kami</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.instagram.com/bimetabox/">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PAGE CONTENT ==========-->
        
        @yield('content')
        
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{route('beranda')}}">Beranda</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{route('companyProfile')}}">Profil Perusahaan</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{route('product')}}">Produk & Portofolio</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{route('contact')}}">Hubungi Kami</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.instagram.com/bimetabox/">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li class="g-font-size-15--xs g-color--white-opacity">Jam Operasional :</li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity">Senin - Jumat 08:00 - 17:00</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity">Sabtu - 08:00 - 12:00</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Bimeta Karnusa</h3>
                            <p class="g-color--white-opacity">Jl. Raya Batujajar No.98, Cimareme, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552</p>
                            <p class="g-color--white-opacity">Hubungi Kami : (022) 6864277</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="{{asset('front/img/logo-bimeta.png')}}" height="50px" width="70px" alt="Logo Bimeta">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="/">Bimeta Karnusa</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="{{asset('front/vendor/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/jquery.migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{asset('front/vendor/jquery.smooth-scroll.min.js')}}"></script> -->
        <script type="text/javascript" src="{{asset('front/vendor/jquery.back-to-top.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/swiper/swiper.jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/waypoint.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/counterup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/vendor/jquery.parallax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="{{asset('front/vendor/jquery.wow.min.js')}}"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="{{asset('front/js/global.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/header-sticky.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/counter.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/portfolio-3-col.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/google-map.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/components/wow.min.js')}}"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>

<!DOCTYPE html>
<!--
    Tutorial za Laravel templates https://laravel.com/docs/5.3/blade
    Tutorial za Laravel strukturu direktorijuma https://laravel.com/docs/5.3/structure
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <!-- metatagovi -->
        <meta name="description" content="Belgrade Luxury offers services for VIP party travelers without hidden costs in Belgrade, Serbia. " />
        <meta name="keywords" content="belgrade stag, belgrade bachelor, belgrade bachelor party, serbian clubs, serbian nightlife, serbian bachelor, serbian stag, belgrade bars, belgrade restaurants, belgrade vip, party concierge, belgrade accommodation, lounge bars">
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PP3HH9');</script>
        <!-- End Google Tag Manager -->

        <link rel="shortcut icon" href="<?php echo url("") ?>/images/logo-bl-white.ico"  type="image/x-icon" /> 
        <title> Belgrade Luxury - VIP experience Belgrade nightlife  </title>
        
        <!-- 
            css i js fajlovi za menu, container i footer (treba ih napisati)
            ovde treba da budu navedeni svi css i js fajlovi zajednicki za sve stranice
            skladiste se u folderu public/css i public/js (u odnosu na root)        
        -->
        <!-- Include style sheets common for all pages -->
        <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/standard.style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/header.style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/container.style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo url('/') ?>/css/footer.style.css" />
        <!-- Include jQuery -->
        <!--<script type="text/javascript" src="js/jquery-3.1.1.js"></script>-->        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.mobile-1.4.5.js"></script>
        <!-- Include the YT API Library -->
        <script type='text/javascript' src='http://www.youtube.com/iframe_api'></script>
        <!-- Include scripts common for all pages -->
        <script type="text/javascript" src="<?php echo url('/') ?>/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="<?php echo url('/') ?>/js/header.js"></script> 
        <script type="text/javascript" src="<?php echo url('/') ?>/js/_main.js"></script>
        <script type="text/javascript" src="<?php echo url('/') ?>/js/reflection.js"></script>
        <!-- za svaku stranicu treba definisati sekciju scripts koja uvozi css i js fajlove potrebne za tu stranicu -->
        @yield('scripts')
    </head>

    <body>
              <!-- Google Tag Manager (noscript) -->
                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP3HH9"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
              <!-- End Google Tag Manager (noscript) -->
              
              
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
            <header id="header-section" class="ha-header ha-non-transparent fullwidth"> 
                <a href="#" id="pull">MENU</a>
                <nav class="top-nav">

                    <ul class="top-nav-menu" id="navigation">
                        <li class="top-nav-menu-item" ><div><a href="<?php echo url('/') ?>">HOME</a></div></li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item"><div><a href="<?php echo url('/under-construction') ?>">CONTACT</a></div></li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item" id="services" ><div><a href="#">SERVICES</a></div>                   
                            <ul class="top-nav-submenu" id="services-submenu" style="height: 120px;">
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/') ?>" >packages</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">custom package</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">all services</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">ultra VIP services</a></div></li>
                            </ul>                    
                        </li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item" id="home-logo">
                            <div class="site-logo">
                                <a href="<?php echo url('/') ?>" >
                                    <img id="site-logo" src="<?php echo url('/') ?>/images/logo.svg" alt="Belgrade Luxury">
                                </a>
                            </div>
                        </li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item" id="places"><div><a href="#">PLACES</a></div>
                            <ul class="top-nav-submenu" id="places-submenu" style="height: 150px;">
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">hotels</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">restaurants</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">bars</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">clubs</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">kafane</a></div></li>
                            </ul>
                        </li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item"><div><a href="<?php echo url('/under-construction') ?>">VISIT</a></div></li>
                        <li class="top-nav-menu-separator"></li>
                    </ul>           
                </nav>             
            </header>
        @show
        
        <!-- 
            za svaku stranicu treba definisati content sekciju (sadrzaj)
            sve slike se skladiste u storage/app/images folderu
            svi css i js fajlovi u public/css i public/js
            za kontrolere pogledati na google-u gde tacno stoje
            za svaku novu stranicu obavezno dodati rutu u routes/web.php fajlu
        -->      
        <div class="container">
            <!--
            <section class="language-toolbar">
                <div class="tooltip">
                    LANG
                </div>
                
            </section>
            -->
            @yield('content')
        </div>
        
        <!-- footer se definise ovde jer ce biti isti za sve stranice -->
        @section ('footer')
            <section class="footer">
                <!-- TO DO footer -->
                <div class="content">
                    
                    <div class="col span_1_of_4">
                        <div class="row">
                            <div class="content">
                                <a href="<?php echo url('/') ?>">
                                    <img class="logo-image" src="<?php echo url('/') ?>/images/logo.svg" alt="Belgrade Luxury" />
                                </a>
                                <p>
                                    <span class="belux-logo">BELGRADE <span>LUXURY</span></span> offers services for VIP party travelers without hidden costs in Belgrade, Serbia. Five stars apartments, luxury vehicles, VIP entrance and tables in clubs and restaurants, free premium drinks, etc... Full service from arrival to departure, for one price. 
                                    <br />
                                    Simply <span class="belux-logo"> BE<span> LUX </span></span>.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4">
                        <div class="row">
                            <div class="content">
                                <h3>Our partners</h3>
                                <div class="section group gallerySection">
                                    <div class="col">
                                        <a href="http://www.thebank.rs/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/bank.png" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://www.metropolpalace.com/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/metropol.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://www.spaintimo.rs/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/spaintimo.png" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://luxurybelgradeapartments.com/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/lba.png" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://www.gaucosi.rs/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/gaucosi.png" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://www.squareclubbelgrade.rs/">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/partners/square.png" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4">
                        <div class="row">
                            <div class="content">
                                <h3>Contact us</h3>
                                
                                <h4 class="belux-logo">BELGRADE <span>LUXURY</span></h4>
                                <address>
                                    <p> 
                                        <div class="icon-location"></div>&nbsp;Republic Square<br>
                                        11000 Belgrade SERBIA <br>
                                        <div class="icon-phone whatsapp"></div> / <div class="icon-phone viber"></div>
                                        &nbsp;+381 64 4519 017 <br>
                                        <div class="icon-mail"></div>&nbsp;
                                        <a class="light" href="mailto:office@belgradeluxury.com">office@belgradeluxury.com</a>
                                        <br />
                                        <div class="icon-mail"></div>&nbsp;
                                        <a class="light" href="mailto:inquiry@belgradeluxury.com">inquiry@belgradeluxury.com</a> 
                                    </p>
                                </address>
                            </div>     
                        </div>
                    </div>
                    
                    <div class="col span_1_of_4">
                        <div class="row">
                            <div class="content">
                                <h3>Follow us, we are social</h3>                                 
                                <nav class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/belgradeluxury/">
                                                <img src="<?php echo url('/') ?>/images/social/gold/facebook-logo.svg" alt="Facebook" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/belgradeluxury/">
                                                <img src="<?php echo url('/') ?>/images/social/gold/instagram-logo.svg" alt="Instagram" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCpIeICs4R7XgqNzQ8fecWHQ">
                                                <img src="<?php echo url('/') ?>/images/social/gold/youtube-logo.svg" alt="Twitter" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route("construction") }}">
                                                <img src="<?php echo url('/') ?>/images/social/gold/whatsapp-logo.svg" alt="Whatsapp" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route("construction") }}">
                                                <img src="<?php echo url('/') ?>/images/social/gold/viber-logo.svg" alt="Viber" />
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                    </div>    
                </div>   
                
                <div class="bottom-row">
                        <div class="section group">
                            <div class="col span_1_of_3">
                                <span class="belux-logo">BELGRADE <span>LUXURY</span></span> is a project of 
                                <a class="light" href="#">
                                    © code 581
                                </a>
                            </div>
                            <div class="col span_1_of_3">
                                <nav class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo url('/') ?>/images/social/gold/facebook-logo.svg" alt="Facebook" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo url('/') ?>/images/social/gold/instagram-logo.svg" alt="Instagram" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo url('/') ?>/images/social/gold/twitter-logo.svg" alt="Twitter" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo url('/') ?>/images/social/gold/youtube-logo.svg" alt="Youtube" />
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col span_1_of_3">
                                <a class="light" id="go-top" href="#top">- Go to the top -</a>
                            </div>
                        </div>
                    </div>
            </section>
        @show
        
    </body>
</html>

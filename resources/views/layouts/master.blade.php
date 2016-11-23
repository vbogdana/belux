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
        <meta name="description" content="Belgrade Luxury offers services for VIP party travelers, without hidden costs in Belgrade, Serbia. Five stars apartmants, luxury vehicles, VIP entrance and places in clubs, free premium drinks. Full service from arrival to return, for one price." />
        <meta name="keywords" content="belgrade stag, belgrade bachelor, belgrade bachelor party, serbian clubs, serbian nightlife,serbian bachelor, serbian stag, belgrade bars, belgrade restaurants, belgrade vip, party concierge,belgrade accommodation,lounge bars">
        
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
              
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
            <header id="header-section" class="ha-header ha-non-transparent fullwidth"> 
                <a href="#" id="pull">MENU</a>
                <nav class="top-nav">

                    <ul class="top-nav-menu" id="navigation">
                        <li class="top-nav-menu-item" ><div><a href="<?php echo url('/') ?>">HOME</a></div></li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item"><div><a href="#">CONTACT</a></div></li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item" id="services" ><div><a href="#">SERVICES</a></div>                   
                            <ul class="top-nav-submenu" id="services-submenu" style="height: 120px;">
                                <li class="top-nav-submenu-item"><div><a href="#">packages</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">custom package</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">all services</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">ultra VIP services</a></div></li>
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
                                <li class="top-nav-submenu-item"><div><a href="#">hotels</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">restaurants</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">bars</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">clubs</a></div></li>
                                <li class="top-nav-submenu-item"><div><a href="#">kafane</a></div></li>
                            </ul>
                        </li>
                        <li class="top-nav-menu-separator"></li>
                        <li class="top-nav-menu-item"><div><a href="#">VISIT</a></div></li>
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
            @yield('content')
        </div>
        
        <!--
        @section('contact')
            <div class="contact-toolbar">
                nemam pojma gde toolbar da strpam nigde ne ide
                <div class="phone-wrapper">
                +381641234567    
                </div>
                <div class="email-wrapper">
                office@belgradeluxury.com   
                </div>
                <div class="social-wrapper">
                    
                </div>
            </div>
        @show 
        -->
        
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
                                    <span class="belux-logo">BELGRADE <span>LUXURY</span></span> Belgrade Luxury offers services for VIP party travelers, without hidden costs in Belgrade, Serbia. Five stars apartmants, luxury vehicles, VIP entrance and places in clubs, free premium drinks. Full service from arrival to return, for one price.
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
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event1.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event2.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event3.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event1.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event2.jpg" alt="Our partners">
                                                        <div class="overlay"></div>
                                                        <div class="partnerinfo">

                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>                                       
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#">
                                            <figure>
                                                <figcaption>
                                                    <div class="hovereffect">
                                                        <img class="" src="<?php echo url('/') ?>/images/event3.jpg" alt="Our partners">
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
                                        <div class="icon-location"></div>&nbsp;Neka adresa br.10<br>
                                        11000 Belgrade SERBIA <br>
                                        <div class="icon-phone whatsapp"></div> / <div class="icon-phone viber"></div>
                                        &nbsp;+381 66 1234 567 <br>
                                        <div class="icon-mail"></div>&nbsp;<a class="light" href="mailto:office@belgradeluxury.com">office@belgradeluxury.com</a> 
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
                                                <img src="<?php echo url('/') ?>/images/social/gold/whatsapp-logo.svg" alt="Whatsapp" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
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

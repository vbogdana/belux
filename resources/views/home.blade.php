<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
<link rel="stylesheet" type="text/css" href="css/home.style.css" />
<link rel="stylesheet" type="text/css" href="css/events.style.css" />
<link rel="stylesheet" type="text/css" href="css/benefits.style.css" />
<link rel="stylesheet" type="text/css" href="css/quote.style.css" />
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript"  src="js/jquery.sldr.js"></script>
@stop

<!-- 
    redefinicija menija jer ce za home biti drugaciji 
    (bice providan na vrhu zbog videa, na ostalim stranicama nece)
-->
@section('sidebar')
    <div class="se-pre-con"></div>
    
    <header id="header-section" class="ha-header ha-transparent fullwidth"> 
        <a href="#" id="pull">MENU</a>
        <nav class="top-nav">
            
            <ul class="top-nav-menu" id="navigation">
                <li class="top-nav-menu-item" ><div><a href="<?php echo url('/') ?>">HOME</a></div></li>
                <li class="top-nav-menu-separator"></li>
                <li class="top-nav-menu-item"><div><a href="<?php echo url('/under-construction') ?>">CONTACT</a></div></li>
                <li class="top-nav-menu-separator"></li>
                <li class="top-nav-menu-item" id="services" ><div><a href="">SERVICES</a></div>                   
                    <ul class="top-nav-submenu" id="services-submenu" style="height: 120px;">
                        <li class="top-nav-submenu-item"><div><a href="#content">packages</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">custom package</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">all services</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="<?php echo url('/under-construction') ?>">ultra VIP services</a></div></li>
                    </ul>                    
                </li>
                <li class="top-nav-menu-separator"></li>
                <li class="top-nav-menu-item" id="home-logo">
                    <div class="site-logo">
                        <a href="<?php echo url('/') ?>" >
                            <img id="site-logo" src="<?php echo url("") ?>/images/logo.svg" alt="Belgrade Luxury">
                        </a>
                    </div>
                </li>
                <li class="top-nav-menu-separator"></li>
                <li class="top-nav-menu-item" id="places"><div><a href="">PLACES</a></div>
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
@stop

@section('content')
<!-- za sve ove klase treba napisati css -->

<!-- =============== START VIDEO SECTION ================= -->
<section id="top" class="video-section [widescreen]">
 
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/gCdSM1IXZvo?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>      
<!--
-->   
    <div class="overlay"></div>
    
    <div class="overlay-text">
        <h1 class="overlay-text-row" > VIP EXPERIENCE - BELGRADE NIGHTLIFE </h1> 
        <h2 class="overlay-text-row quotes"> BELGRADE <span> LUXURY </span> </h2>
        <h2 class="overlay-text-row quotes"> <span> VIP </span> PLACES </h2>
        <h2 class="overlay-text-row quotes"> LUXURY <span> APARTMENTS </span> </h2>
    </div>
    
    <div class="scroll-sign">
        <a href="#aboutus">
            <img src="<?php echo url("") ?>/images/3-diamonds.png" />
        </a>
    </div>
    
</section>
<!-- =============== END VIDEO SECTION =================== -->

<!-- =============== START ABOUT US SECTION ============== -->
<section class="about-us-section" id="aboutus" >

    <div class="background">
        <div class="content">
            <div class="section-title animation-element fade-in">
                <h2> ABOUT US </h2>
                <div class="horizontal-line"></div>
            </div>
            
            <div class="wrapper" >
                <div class="about-us-container">
                    <h3 class="animation-element fade-in belux-logo"> 
                        BELGRADE<span>LUXURY</span> 
                    </h3>
                    <div class="horizontal-line"></div>
                    <p class="animation-element fade-in"> 
                        belgradeluxury.com is a unique concept designed exclusively for people with exquisite taste 
                        who want the quality of their visit to the capital of Serbia to be to the highest standards. 
                        To help our customers, we have prepared a variety of packages that can meet their different needs and preferences. 
                        Professional service of our staff may be available to our clients for the duration of the whole arrangement. 
                        We offer the most exclusive villas and suites, VIP treatment in the city's best restaurants, bars and clubs, 
                        personal chauffeur service and luxury vehicles, personal security, boat tours of the city, 
                        accompanied by a personal guide and visit the most interesting sites in Serbia.
                    </p>
                    <div class="horizontal-line"></div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- =============== END ABOUT US SECTION ================ -->

<!-- =============== START PROMOTIONS SECTION ============== -->
<section class="promotions-section">
    <div class="background" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5"></div>
    <div class="overlay"></div>
    <div class="content">
        <div class="cards-container">
                <div id="cards">
                    <figure >
                        <img class="card floating" src="<?php echo url("") ?>/images/cards/front-6.svg" width="300.5px" height="187px"alt="NEWYEAR Luxury Package" />
                    </figure> 
                    <figure>
                        <img class="card floating" src="<?php echo url("") ?>/images/cards/front-5.svg" width="300.5px" height="187px"alt="NEWYEAR VIP Luxury Package" />
                    </figure>
                </div>
        </div>
        
        <div class="promotions-container">
            <h2 class="animation-element fade-in"> <span> New Year </span> in Belgrade <span> ? </span> </h2>
            <!--
            <p>
                A <span> New Year's Eve </span> you are definitely going to remember!
                Belgrade is <span> THE </span> place to be when clock strikes 12,
                and <span> we are here </span> to make this happen.
            </p>
            -->
            <p id="promotion" class="animation-element fade-in" >
                Take a look at our
                <a class="light" href="<?php echo url('/') ?>/packages/new-year-luxury-package"> NEW YEAR LUXURY </a>
                and
                <a class="light" href="<?php echo url('/') ?>/packages/new-year-vip-luxury-package"> NEW YEAR VIP LUXURY </a>
                packages, and don't forget to make <span> a wish </span> !
            </p>
        </div>
    </div>
</section>
<!-- =============== END PROMOTIONS SECTION ================ -->

<!-- =============== START PACKAGES SECTION ============== -->
<section id="content" class="packages-section">
    <div class="background" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5">
        <div class="content">
            <div class="section-title animation-element fade-in">
              <h2> PACKAGES </h2>
              <div class="horizontal-line"></div>
            </div>
            
            <div class="section-description">
                <p class="animation-element fade-in">
                    These are our <a class="light" href="#content">special packages</a> that we have prepared for <span>You</span>. 
                    Each one has been carefully selected by 
                    <a href="<?php echo url('/') ?>" class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 
                    team to meet <span>all of Your needs</span>.
                    Choose Your favorite, or <a class="light" href="<?php echo url('/under-construction') ?>"> create one </a> according to Your taste.
                </p>
            </div> 
            
            <div class="section-description" id="package-info">
                <div class="section-title animation-element fade-in">
                    <h4 id="package-title"> LUXURY PACKAGE </h4>
                    <div class="horizontal-line"></div>
                </div>
                <div id="reserve" class="btn gold"> RESERVE </div>
                <div id="details" class="btn gold"> DETAILS >> </div>
            </div>
            
            
            
            <div class="packages-container">                                             
                <div class="carousel-container">
                    <div class="previous-btn">
                        <img src="<?php echo url("") ?>/images/next.svg" />
                    </div>
                    <div class="next-btn">
                        <img src="<?php echo url("") ?>/images/next.svg" />
                    </div>
                    <div id="carousel">
                        <figure id="0" class="luxury">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img id="luxury" src="<?php echo url("") ?>/images/cards/front-1.svg" class="card" height="227px" width="363.5px" alt="Luxury Package"/>
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-1.svg" class="card" height="227px" width="363.5px" alt="Luxury Package" />
                                    </div>
                                    <!--
                                    <div class="bottom">
                                        A
                                    </div>
                                    -->
                                </div>
                            </div>                  
                        </figure>
                        <figure id="1" class="vip-luxury">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front floating floating1">
                                        <img id="vip-luxury" src="<?php echo url("") ?>/images/cards/front-2.svg" class="card" height="227px" width="363.5px" alt="VIP Luxury Package"/>
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-2.svg" class="card" height="227px" width="363.5px" alt="VIP Luxury Package"/>
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="2" class="bachelor-luxury">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front floating floating2">
                                        <img id="bachelor-luxury" src="<?php echo url("") ?>/images/cards/front-3.svg" class="card" height="227px" width="363.5px" alt="NEWYEAR Luxury Package" />
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-3.svg" class="card" height="227px" width="363.5px"alt="NEWYEAR Luxury Package" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="3" class="bachelor-penthouse">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front floating floating3">
                                        <img id="bachelor-penthouse" src="<?php echo url("") ?>/images/cards/front-4.svg" class="card" height="227px" width="363.5px" alt="Luxury Package" />
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-4.svg" class="card" height="227px" width="363.5px"alt="Luxury Package" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="4" class="new-year-vip-luxury">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front floating floating4">
                                        <img id="new-year-vip-luxury" src="<?php echo url("") ?>/images/cards/front-5.svg" class="card" height="227px" width="363.5px" alt="Luxury Package"/>
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-5.svg" class="card" height="227px" width="363.5px" alt="Luxury Package"/>
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="5" class="new-year-luxury">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front floating floating5">
                                        <img id="new-year-luxury" src="<?php echo url("") ?>/images/cards/front-6.svg" class="card" height="227px" width="363.5px" alt="Luxury Package"/>
                                    </div>
                                    <div class="back">
                                        <img src="<?php echo url("") ?>/images/cards/front-6.svg" class="card" height="227px" width="363.5px" alt="Luxury Package" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>
<!-- =============== END PACKAGES SECTION ================ -->

<!-- =============== START QUOTE SECTION ============== -->
<section class="quote-section">    
    <div class="content">
        <div class="background" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5"></div>
        <div class="overlay"></div>
        <div class="wrapper" >            
            <blockquote class="center-quote blockquotes">
                Luxury Is in Each Detail.
                <cite>Hubert de Givenchy</cite>
            </blockquote>
            
            <blockquote class="center-quote blockquotes">
                Travel Is the Only Thing You Buy That Makes You Richer.
            </blockquote>
            
            <blockquote class="center-quote blockquotes">
                The Best Luxury Services Are Customized, Not Standardized.
            </blockquote>
            
            <blockquote class="center-quote blockquotes">
                It Is Better to See Something Once Than to Hear about It a Thousand Times.
            </blockquote>                        
            
            <blockquote class="center-quote blockquotes">
                The World Is a Book, and Those Who Do Not Travel Read Only a Page.
                <cite>Saint Augustine</cite>
            </blockquote>
            
        </div>
    </div>
</section>  
<!-- =============== END QUOTE SECTION ============== -->

<!-- =============== START EVENTS SECTION ================ -->
<section style="padding-bottom:0; padding-top:0;" class="events-section">
    <div class="background">
        <div class="content">
            <div class="section-title animation-element fade-in">
                <h2> EVENTS IN BELGRADE </h2>
                <div class="horizontal-line"></div>     
            </div>

            <div class="section-description">
                    <p class="animation-element fade-in">
                        Here in <a href="<?php echo url('/') ?>" class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> we are giving our best to make your stay in our city <span>unforgettable</span>.
                        If You are planning a trip to <a href="<?php echo url('/under-construction') ?>" class="light">Belgrade</a>, you must not miss these <span>events</span>!
                        This is our <span>selected choice</span> of interesting happenings for the upcoming weeks.
                    </p>
            </div>

            <div class="gallerySection">
                <div class="container-fluid" style="padding:0; height:auto; display: table;">
                    <div class="col-sm-12">
                        <!-- Content Container -->
                        <div class="content-container clearfix">
                            <!-- Single Album Container -->
                            <div class="single-photo-album-container">
                                <div class="row">
                                    <!-- Single Album Article -->
                                    <article class="col-sm-12 col-md-6 col-xs-12">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/eventbank1.jpg" alt="Event in Belgrade Club Bank">
                                                    <div class="overlay"></div>
                                                    <div class="event-date">
                                                        <div class="proTitle">9.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>   
                                                    </div>
                                                    <div class="eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo" src="<?php echo url("") ?>/images/logobank.png" alt="Club Bank">                                                   
                                                                <div class="proTitle">STRAIGHT TO THE BANK</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle">BETON HALA KARADJORDJEVA,FRIDAY 9TH DEC</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                            <!-- Single Album View Button -->
                                        </figure>
                                    </article>
                                    <!-- Single Album Article -->
                                    <article class="col-sm-3 col-xs-6">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/brankovevent2.jpg" alt="Event in Belgrade Club Brankow">
                                                    <div class="overlay">
                                                    </div>
                                                    <div class="event-date">
                                                        <div class="proTitle">9.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>   
                                                    </div>
                                                    <div class=" eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo"  src="<?php echo url("") ?>/images/klubbrankow.png" alt="Club Brankow">                                                   
                                                                <div class="proTitle">FRIDAY 9.12.2016.</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle">DEE PEEPE <br/> MILOS STARCEVIC</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <!-- Single Album Article -->
                                    <article class="col-sm-3 col-xs-6">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/tiltevent1.jpg" alt="Event in Belgrade club tilt">
                                                    <div class="overlay">
                                                    </div>
                                                    <div class="event-date">
                                                        <div class="proTitle">6.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>   
                                                    </div>
                                                    <div class=" eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo" src="<?php echo url("") ?>/images/klubtilt.png" alt="Club Tilt">                                                   
                                                                <div class="proTitle">MUSIC OF THE '90s</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle">TUESDAY NIGHT</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <!-- Single Album Article -->
                                    <article class="col-sm-3 col-xs-6">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/tiltevent2.jpg" alt="Event in Belgrade Club Tilt">
                                                    <div class="overlay">
                                                    </div>
                                                    <div class="event-date">
                                                        <div class="proTitle">9.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>
                                                    </div>
                                                    <div class=" eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo" src="<?php echo url("") ?>/images/klubtilt.png" alt="Club Tilt">                                                   
                                                                <div class="proTitle">THE CLUB TILT</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle">MUSIC OF THE '00s</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <!-- Single Album Article -->
                                    <article class="col-sm-3 col-xs-6">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/eventbrankov1.jpg" alt="Event in Belgrade Club Brankow">
                                                    <div class="overlay">
                                                    </div>
                                                    <div class="event-date">
                                                        <div class="proTitle">7.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>
                                                    </div>
                                                    <div class=" eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo" src="<?php echo url("") ?>/images/klubbrankow.png" alt="Club Brankow">                                                   
                                                                <div class="proTitle">THURSDAY DELIGHT</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle"> DJ Architect <br/> DJ Fake Casual</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <!-- Single Album Article -->
                                    <article class="col-sm-12 col-md-6 col-xs-12">
                                        <!-- Single Album Contant Container -->
                                        <figure>
                                            <!-- Single Album Image -->
                                            <figcaption>
                                                <!-- Single Album Image -->
                                                <div class="hovereffect">
                                                    <img class="" src="<?php echo url("") ?>/images/event3.jpg" alt="Event in Belgrade Club Bank">
                                                    <div class="overlay">
                                                    </div>
                                                    <div class="event-date">
                                                        <div class="proTitle">10.</div>
                                                        <div class="horizontal-line"></div>
                                                        <div class="proSubtitle">DEC</div>
                                                    </div>
                                                    <div class=" eventinfo">
                                                        <div class="event-content">
                                                            <div class="event-hover">
                                                                <img class="club-logo" src="<?php echo url("") ?>/images/logobank.png" alt="Club Bank">                                                   
                                                                <div class="proTitle">ROBER THE BANK</div>
                                                                <div class="horizontal-line"></div> 
                                                                <div class="proSubtitle">BETON HALA KARADJORDJEVA,FRIDAY 9TH DEC</div>
                                                                <!--
                                                                <div class="stasveima">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/disko.png" alt="" >
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/kibla.png" alt="">
                                                                    <img class="slicice" src="<?php echo url("") ?>/images/koktel.png" alt="">
                                                                </div>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>								
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end container -->
            </div>
        </div>
    </div>
</section>
<!-- =============== END EVENTS SECTION ================== -->

<!-- =============== START BENEFITS SECTION ============== -->
<!--
<section class="benefits-section">
    <div class="section-title animation-element fade-in">
          <h2> CLIENT EXPERIENCE </h2>
             </div>
    
    <div class="stage">


	<div id="SLDR-ONE" class="sldr">
		<ul class="wrp animate">
			<li class="elmnt-one"><div class="skew"><div class="wrap"><img src="<?php echo url("") ?>/images/Klijent1.png" width="500" height="250"></div></div></li>
			<li class="elmnt-two"><div class="skew"><div class="wrap"><img src="<?php echo url("") ?>/images/Klijent2.png" width="500" height="250"></div></div></li>
			<li class="elmnt-three"><div class="skew"><div class="wrap"><img src="<?php echo url("") ?>/images/Klijent1.png" width="500" height="250"></div></div></li>
			<li class="elmnt-four"><div class="skew"><div class="wrap"><img src="<?php echo url("") ?>/images/Klijent2.png" width="500" height="250"></div></div></li>
		</ul>
	</div>

	<div class="clear"></div>

        
	<ul class="selectors">
		<li class="focalPoint"><a href="">•</a></li><li><a href="">•</a></li><li><a href="">•</a></li><li><a href="">•</a></li>
	</ul>
        
	

	<br>

    </div>
</section>
-->
<!-- =============== END BENEFITS SECTION ================ -->

<!-- =============== START SOCIAL SECTION ================ -->
<div class="social-section">
    
</div>
<!-- =============== END SOCIAL SECTION ================== -->


  <script>

$( window ).load( function() {

	$( '.sldr' ).each( function() {
		var th = $( this );
		th.sldr({
			focalClass    : 'focalPoint',
			offset        : th.width() / 2,
			sldrWidth     : 'responsive',
			nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
			previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
			selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
			toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
			sldrInit      : sliderInit,
			sldrStart     : slideStart,
			sldrComplete  : slideComplete,
			sldrLoaded    : sliderLoaded,
			sldrAuto      : true,
			sldrTime      : 5000,
			hasChange     : true
		});
	});

});

/**
 * Sldr Callbacks
 */

/**
 * When the sldr is initiated, before the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderInit( args ) {

}

/**
 * When individual slides are loaded
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideLoaded( args ) {

}

/**
 * When the full slider is loaded, after the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderLoaded( args ) {

}

/**
 * Before the slides change focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideStart( args ) {

}

/**
 * After the slides are done changing focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideComplete( args ) {

}

</script>


@stop


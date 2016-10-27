<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
<link rel="stylesheet" type="text/css" href="css/home.style.css" />
<script type="text/javascript" src="js/reflection.js"></script>
<script type="text/javascript" src="js/home.js"></script>
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
                <li class="top-nav-menu-item"><div><a href="#">CONTACT</a></div></li>
                <li class="top-nav-menu-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                <li class="top-nav-menu-item" id="services" ><div><a href="#">SERVICES</a></div>                   
                    <ul class="top-nav-submenu" id="services-submenu">
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
                            <img id="site-logo" src="../storage/app/images/logo1.png" alt="Belgrade Luxury">
                        </a>
                    </div>
                </li>
                <li class="top-nav-menu-separator"></li>
                <li class="top-nav-menu-item" id="places"><div><a href="#">PLACES</a></div>
                    <ul class="top-nav-submenu" id="places-submenu">
                        <li class="top-nav-submenu-item"><div><a href="#">hotels</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="#">restaurants</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="#">bars</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="#">clubs</a></div></li>
                        <li class="top-nav-submenu-item"><div><a href="#">kafane</a></div></li>
                    </ul>
                </li>
                <li class="top-nav-menu-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                <li class="top-nav-menu-item"><div><a href="#">VISIT</a></div></li>
                <li class="top-nav-menu-separator"></li>
            </ul>           
        </nav>             
    </header>
@stop

@section('content')
<!-- za sve ove klase treba napisati css -->
<section class="video-section [widescreen]">
    
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/FLKXSgXNl8w?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>      
  
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src=''></iframe>      
    
    <div class="overlay"></div>
    
    <div class="overlay-text">
        <h1 class="overlay-text-row" > VIP EXPERIENCE - BELGRADE NIGHTLIFE </h1> 
        <h2 class="overlay-text-row quotes"> Belgrade Luxury </h2>
        <h2 class="overlay-text-row quotes"> VIP places </h2>
        <h2 class="overlay-text-row quotes"> Luxury apartments </h2>
    </div>
    
    <div class="scroll-sign">
        <a href="#aboutus">
            <img src="../storage/app/images/diamond-gold.png" />
        </a>
    </div>
    
</section>

<section class="about-us-section" id="aboutus">
    <div class="background"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#aboutus" >
        
    <div class="animation-element slide-left module">
        <img src="../storage/app/images/big-diamond-reverse.png" />
    </div>    
        
        
    </div>
    
  
    <div > <h2> About Us </h2> </div>
    
    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br> and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
    <span> 
        <img class="diamond" src="../storage/app/images/dijamantlevo.png" style="width: 10%; float:left">
        <h2>LUXURY AUTOMOBILE</h2>
        <img class="diamond" src="../storage/app/images/dijamantdesno.png"style="width: 10%; float:right">
    </span>
 
</section>

<section id="content" class="packages-section">
    
    <div class="packages-container">
        <div class="carousel-container">
            <div id="carousel">
                <figure id="0">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                            </div>
                            <div class="back">
                             A
                            </div>
                        </div>
                    </div>                  
                </figure>
                <figure id="1">
                    <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                </figure>
                <figure id="2">
                    <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                </figure>
                <figure id="3">
                    <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                </figure>
                <figure id="4">
                    <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                </figure>
                <figure id="5">
                    <img src="../storage/app/images/card.png" class="card" height="180px" width="300px" />
                </figure>
            </div>
        </div>
    </div>
    
</section>

<div class="benefits-section">
    
</div>

<div class="events-section">
    
</div>

<div class="social-section">
    
</div>

@stop

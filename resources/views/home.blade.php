<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
<link rel="stylesheet" type="text/css" href="css/header.style.css" />
<link rel="stylesheet" type="text/css" href="css/home.style.css" />
<script type="text/javascript" src="js/home.js"></script>
@stop

<!-- 
    redefinicija menija jer ce za home biti drugaciji 
    (bice providan na vrhu zbog videa, na ostalim stranicama nece)
-->
@section('sidebar')
    <header id="header-section" class="ha-header ha-transparent fullwidth"> 
        <nav class="top-nav">
            <ul class="top-nav-menu" id="navigation">
                <li class="top-nav-item" ><a href="<?php echo url('/') ?>">HOME</a></li>
                <li class="top-nav-separator"></li>
                <li class="top-nav-item"><a href="#">SERVICES</a></li>
                <li class="top-nav-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                <li class="top-nav-item"><a href="#">CONTACT</a></li>
                <li class="top-nav-separator"></li>
                <li class="top-nav-item" id="home-logo">
                    <div class="site-logo">
                        <a href="<?php echo url('/') ?>" >
                            <img id="site-logo" src="../storage/app/images/logo2.png" alt="Belgrade Luxury">
                        </a>
                    </div>
                </li>
                <li class="top-nav-separator"></li>
                <li class="top-nav-item"><a href="#">PLACES</a></li>
                <li class="top-nav-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                <li class="top-nav-item"><a href="#">VISIT</a></li>
                <li class="top-nav-separator"></li>
            </ul>
            <a href="#" id="pull">MENU</a>
        </nav>             
    </header>
@stop

@section('content')
<!-- za sve ove klase treba napisati css -->
<div class="video-section [widescreen]">
    <!--
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/FLKXSgXNl8w?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>      
    -->
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
    
</div>

<div class="about-us-section">
    <div id="aboutus"> <h2> About Us </h2> </div>
    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br> and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
    <span> 
        <img class="diamond" src="../storage/app/images/dijamantlevo.png" style="width: 10%; float:left">
        <h2>LUXURY AUTOMOBILE</h2>
        <img class="diamond" src="../storage/app/images/dijamantdesno.png"style="width: 10%; float:right">
    </span>  
</div>

<div class="packages-section">
    
</div>

<div class="benefits-section">
    
</div>

<div class="events-section">
    
</div>

<div class="social-section">
    
</div>

@stop

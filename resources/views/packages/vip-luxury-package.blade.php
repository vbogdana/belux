<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<link rel="stylesheet" type="text/css" href="../css/package.style.css" />
@stop


@section('content')
<section class="section-container package vip-luxury">
    <div class="background" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5"></div>
    <div class="overlay"></div>
    <div class="content">
        <div class="section-title">
            <h2> VIP LUXURY PACKAGE </h2>
            <div class="horizontal-line"></div>
        </div>

        <div class="section-description">
            <p class="">
                These are our <a class="light" href="#">special packages</a> that we have prepared for <span>You</span>. 
                Each one has been carefully selected by 
                <a class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 
                team to meet <span>all of Your needs</span>.
                Choose Your favorite, or <a class="light" href="#"> create one </a> according to Your taste.
            </p>

            <!-- <div id="reserve" class="btn gold"> RESERVE </div> -->
            <div id="inquiry" class="btn gold"> INQUIRY </div>
        </div>
    </div>
</section>

<section class="section-container package luxury">
    <div class="content" id="middle">        
        <div class="ribbon">
            <div class="background" data-stellar-vertical-offset="0" data-stellar-background-ratio="0.2"></div>
            <div class="content">
                <div class="section group">
                    <div class="col span_1_of_3">
                        <div class="group">
                            <div class="col span_1_of_2">
                                <div class="package-card perspective floating">
                                    <div class="rotate">
                                        <img id="vip-luxury" src="<?php echo url("") ?>/images/cards/front-2.svg" class="card" width="300.5px" height="187px" />                               
                                    </div>
                                </div>
                            </div>

                            <div class="col span_1_of_2">
                                <div class="row">
                                    <div class="horizontal-line"></div>
                                    <p class="animation-element fade-in">
                                        These are our <a class="light" href="#">special packages</a> that we have prepared for <span>You</span>. 
                                        Each one has been carefully selected by 
                                        <a href="<?php echo url('/') ?>" class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 
                                        team to meet <span>all of Your needs</span>.
                                        Choose Your favorite, or <a class="light" href="#"> create one </a> according to Your taste.
                                    </p>
                                    <div class="horizontal-line"></div>
                                    <p class="animation-element fade-in">
                                        If you want to <a class="light" href="{{ route("construction") }}">book Your stay with us </a> please send us <a class="light" href="{{ route("construction") }}">an inquiry</a>.
                                        As for any <span>requests </span>in addition to those included in the package, we are always <span>at Your disposal!</span>
                                        Our <span>phone lines and mail </span>are available <span>24/7 </span>to <a class="light" href="{{ route("construction") }}">answer all Your questions</a>. 
                                        For any additional information, suggestions and proposals, <a class="light" href="{{ route("construction") }}">contact us</a>, we would be <span>delighted </span> to be of assistance.
                                    </p>
                                </div>
                                <!-- <div id="reserve" class="btn gold"> RESERVE </div> -->
                                <div id="inquiry" class="btn gold"> INQUIRY </div>
                            </div>
                        </div>

                    </div>

                    <div class="col span_2_of_3">
                        <div class="row">
                            <div class="section-title animation-element fade-in">
                                <h3 id="package-title"> INCLUDED SERVICES </h3>
                                <div class="horizontal-line"></div>   
                            </div>              
                            <div class="section group">
                                <div class="group">
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/calendar.svg">
                                            </div>
                                        </div>
                                        <div id="days" class="row animation-element fade-in">
                                            Per Night
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/accommodation.svg">
                                            </div>
                                        </div>
                                        <div id="accommodation" class="row animation-element fade-in">
                                            5* Hotel Accommodation
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/driver.svg">
                                            </div>
                                        </div>
                                        <div id="driver" class="row animation-element fade-in">
                                            Personal Driver Available
                                        </div>
                                    </div>
                                </div>
                                <div class="group">
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/car.svg">
                                            </div>
                                        </div>
                                        <div id="car" class="row animation-element fade-in">
                                            A High Class Car
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/host.svg">
                                            </div>
                                        </div>
                                        <div id="host" class="row animation-element fade-in">
                                            Personal host
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/vip.svg">
                                            </div>
                                        </div>
                                        <div id="club" class="row animation-element fade-in">
                                            VIP Entrance and VIP Table at the Club of Choice
                                        </div>
                                    </div>
                                </div>
                                <div class="group">
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/club.svg">
                                            </div>
                                        </div>
                                        <div id="drinks" class="row animation-element fade-in">
                                            2 Premium Bottles of Drinks
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/security.svg">
                                            </div>
                                        </div>
                                        <div id="security" class="row animation-element fade-in">
                                            Private security
                                        </div>
                                    </div>
                                    <div class="col span_1_of_3">
                                        <div class="row">
                                            <div class="service-thumbnail">
                                                <img src="<?php echo url("") ?>/images/services/gold/photographer.svg">
                                            </div>
                                        </div>
                                        <div id="photographer" class="row animation-element fade-in">
                                            Photographer Service During the Whole Night
                                        </div>
                                    </div>
                                </div>

                                <div class="col span_3_of_3">
                                    <div class="row">
                                        <div class="section-title animation-element fade-in">
                                            <h4 id="package-title"> FREE OF SERVICE </h4>
                                            <div class="horizontal-line"></div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="col span_3_of_3">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/map.svg">
                                        </div>
                                    </div>
                                    <div id="sightseeing" class="row animation-element fade-in">
                                        Belgrade Sightseeing Tour with a Licensed Tour Guide
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col span_3_of_3">
                        <div class="section-title animation-element fade-in">
                            <h3 id="package-title"> OUR OTHER PACKAGES </h3>
                            <div class="horizontal-line"></div>   
                        </div>
                        <div class="section group">
                            <div class="col span_1_of_5">
                                <div class="package-card perspective">
                                    <div class="rotate">
                                        <a href="../packages/luxury-package">
                                            <img id="luxury" src="<?php echo url("") ?>/images/cards/front-1.svg" class="card" />                               
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_5">
                                <div class="package-card perspective">
                                    <div class="rotate">
                                        <a href="../packages/bachelor-luxury-package">
                                            <img id="bachelor-luxury" src="<?php echo url("") ?>/images/cards/front-3.svg" class="card" />                               
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_5">
                                <div class="package-card perspective">
                                    <div class="rotate">
                                        <a href="../packages/bachelor-penthouse-package">
                                            <img id="bachelor-penthouse" src="<?php echo url("") ?>/images/cards/front-4.svg" class="card" />                               
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_5">
                                <div class="package-card perspective">
                                    <div class="rotate">
                                        <a href="../packages/new-year-luxury-package">
                                            <img id="new-year-luxury" src="<?php echo url("") ?>/images/cards/front-5.svg" class="card" />                               
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_1_of_5">
                                <div class="package-card perspective">
                                    <div class="rotate">
                                        <a href="../packages/new-year-vip-luxury-package">
                                            <img id="new-year-vip-luxury" src="<?php echo url("") ?>/images/cards/front-6.svg" class="card" />                               
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-container video-section">
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/gCdSM1IXZvo?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>      

    <div class="overlay"></div>

    <div class="content">
        <div class="section-description">
            <p class="animation-element fade-in">
                What are
                <br/>
                <span>YOU </span>
                <br />
                waiting for?                
            </p>
            <!-- <div id="reserve" class="btn gold"> RESERVE </div> -->
            <div id="inquiry" class="btn gold"> INQUIRY </div>
        </div>
    </div>    
</section>
@stop


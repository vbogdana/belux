<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<link rel="stylesheet" type="text/css" href="../css/package.style.css" />
@stop


@section('content')
<section class="section-container package vip-luxury">
    <div class="background" data-stellar-background-ratio="0.5"></div>
    <div class="overlay"></div>
    <div class="content">
        <div class="section-title animation-element fade-in">
            <h2> VIP LUXURY PACKAGE </h2>
            <div class="horizontal-line"></div>
        </div>

        <div class="section-description">
            <p class="animation-element fade-in">
                These are our <a class="light" href="#">special packages</a> that we have prepared for <span>You</span>. 
                Each one has been carefully selected by 
                <a class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 
                team to meet <span>all of Your needs</span>.
                Choose Your favorite, or <a class="light" href="#"> create one </a> according to Your taste.
            </p>
            
            <div id="reserve" class="btn gold"> RESERVE </div>
        </div>
        
        <div class="ribbon">
            <div class="background" data-stellar-background-ratio="0.2"></div>
            <div class="overlay"></div>
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
                                    </div>
                                    <div id="reserve" class="btn gold"> RESERVE </div>
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
                                            Personal Driver
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
                </div>
            </div>
        </div>
    </div>
</section>
@stop


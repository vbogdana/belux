<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<link rel="stylesheet" type="text/css" href="../css/package.style.css" />
@stop


@section('content')
<section class="section-container package luxury">
    <div class="background" data-stellar-background-ratio="0.5"></div>
    <div class="overlay"></div>
    <div class="content">
        <div class="section-title animation-element fade-in">
            <h2> LUXURY PACKAGE </h2>
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
        </div>
        
        <div class="ribbon">
            <div class="section group">
                    <div class="col span_1_of_3">
                        <div class="row">
                            <div class="package-card perspective floating">
                                <div class="rotate">
                                    <img id="luxury" src="<?php echo url("") ?>/images/cards/front-1.svg" class="card" height="227px" width="363.5px" />                               
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col span_2_of_3">
                        <div class="row">
                            <div class="section-title animation-element fade-in">
                                <h3 id="package-title"> LUXURY PACKAGE </h3>
                                <div class="horizontal-line"></div>   
                            </div>              
                            <div class="section group">
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/calendar.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/calendar.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="days" class="row">
                                        stay
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/accommodation.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/accommodation.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="accommodation" class="row">
                                        accommodation
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/driver.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/driver.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="driver" class="row">
                                        chauffer
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/car.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/car.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="car" class="row">
                                        high class car
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/host.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/host.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="host" class="row">
                                        host
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/vip.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/vip.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="club" class="row">
                                        vip
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/club.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/club.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="drinks" class="row">
                                        drinks
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/security.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/security.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="security" class="row">
                                        private security
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/photographer.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/photographer.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="photographer" class="row">
                                        photographer
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/map.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/map.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="sightseeing" class="row">
                                        sightseeing
                                    </div>
                                </div>
                                <div class="col span_1_of_4">
                                    <div class="row">
                                        <div class="service-thumbnail">
                                            <img src="<?php echo url("") ?>/images/services/gold/plus.svg">
                                            <img src="<?php echo url("") ?>/images/services/dark/plus.svg" style="display: none">
                                        </div>
                                    </div>
                                    <div id="extra" class="row">
                                        extra
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


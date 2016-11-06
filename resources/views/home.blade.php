<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
<link rel="stylesheet" type="text/css" href="css/home.style.css" />
<link rel="stylesheet" type="text/css" href="css/events.style.css" />
<link rel="stylesheet" type="text/css" href="css/benefits.style.css" />
<script type="text/javascript" src="js/reflection.js"></script>
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
                            <img id="site-logo" src="../storage/app/images/logo.svg" alt="Belgrade Luxury">
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
@stop

@section('content')
<!-- za sve ove klase treba napisati css -->
<section class="video-section [widescreen]">
    <!--
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/FLKXSgXNl8w?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>      
    
    <iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src=''></iframe>      
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
            <img src="../storage/app/images/3-diamonds.png" />
        </a>
    </div>
    
</section>

<section class="about-us-section" id="aboutus" >

        <div class="background">
        <!--
        <div class="animation-element slide-left module">
            <img src="../storage/app/images/big-diamond-reverse.png" />           
        </div>
        -->
        <div class="about-us-title animation-element fade-in">
            <h2> ABOUT US </h2>
        </div>
        
        <div class="about-us-container animation-element fade-in">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
            </p>
            <span> 
                
            </span>
        </div>
        </div>
    
  <!--
   
    
  -->
</section>

<section id="content" class="packages-section">
    
        <div class="packages-container">
            <div class="carousel-container">
                <div id="carousel">
                    <figure id="0">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-1.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                                <!--
                                <div class="bottom">
                                    A
                                </div>
                                -->
                            </div>
                        </div>                  
                    </figure>
                    <figure id="1">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-2.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                            </div>
                        </div> 
                    </figure>
                    <figure id="2">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-3.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                            </div>
                        </div> 
                    </figure>
                    <figure id="3">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-4.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                            </div>
                        </div> 
                    </figure>
                    <figure id="4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-5.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                            </div>
                        </div> 
                    </figure>
                    <figure id="5">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img src="../storage/app/images/cards/card-front-6.svg" class="card" height="227px" width="363.5px" />
                                </div>
                                <div class="back">
                                    <img src="../storage/app/images/cards/card-back.png" class="card" height="227px" width="363.5px" />
                                </div>
                            </div>
                        </div> 
                    </figure>
                </div>
            </div>
        </div>
    
</section>

    	<!-- =============== START EVENTS SECTION ================ -->
<section style="padding-bottom:0; padding-top:0;" class="events-section">
     <div class="about-us-title animation-element fade-in">
          <h2> EVENTS </h2>
             </div>
		<div class="gallerySection">
			<div class="container-fluid" style="padding:0;">
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
												<img class="" src="../storage/app/images/event2.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
												<img class="" src="../storage/app/images/event4.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
												<img class="" src="../storage/app/images/event5.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
												<img class="" src="../storage/app/images/event6.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
												<img class="" src="../storage/app/images/event7.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
												<img class="" src="../storage/app/images/event3.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">  <img src="../storage/app/images/eventdetails.png" class="card" height="100%" width="100%" />     
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
</section>
	<!-- =============== END EVENTS SECTION ================ -->
    


<section class="benefits-section">
    <div class="about-us-title animation-element fade-in">
          <h2> CLIENTS EXPIRICENCE </h2>
             </div>
    
    <div class="stage">


	<div id="SLDR-ONE" class="sldr">
		<ul class="wrp animate">
			<li class="elmnt-one"><div class="skew"><div class="wrap"><img src="../storage/app/images/Klijent1.png" width="500" height="250"></div></div></li>
			<li class="elmnt-two"><div class="skew"><div class="wrap"><img src="../storage/app/images/Klijent2.png" width="500" height="250"></div></div></li>
			<li class="elmnt-three"><div class="skew"><div class="wrap"><img src="../storage/app/images/Klijent1.png" width="500" height="250"></div></div></li>
			<li class="elmnt-four"><div class="skew"><div class="wrap"><img src="../storage/app/images/Klijent2.png" width="500" height="250"></div></div></li>
		</ul>
	</div>

	<div class="clear"></div>

        <!--
	<ul class="selectors">
		<li class="focalPoint"><a href="">•</a></li><li><a href="">•</a></li><li><a href="">•</a></li><li><a href="">•</a></li>
	</ul>
        !-->
	

	<br>

    </div>
</section>


<div class="social-section">
    
</div>
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

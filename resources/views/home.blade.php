<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
<link rel="stylesheet" type="text/css" href="css/home.style.css" />
<link rel="stylesheet" type="text/css" href="css/events.style.css" />
<link rel="stylesheet" type="text/css" href="css/benefits.style.css" />
<link rel="stylesheet" type="text/css" href="css/quote.style.css" />
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

<!-- =============== START VIDEO SECTION ================= -->
<section id="top" class="video-section [widescreen]">
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
            <!--
                <div class="ribbon">
                    <blockquote class="center-quote animation-element fade-in">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <cite>Somebody famous</cite>
                    </blockquote>
                </div>
            !-->
                <div class="about-us-container">
                    <h3 class="animation-element fade-in belux-logo"> 
                        BELGRADE<span>LUXURY</span> 
                    </h3>
                    <div class="horizontal-line"></div>
                    <p class="animation-element fade-in"> 
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                    </p>
                    <div class="horizontal-line"></div>
                </div> 

                <!--
                <div class="services-container">
                    <ul class="services-list">
                        <li>

                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </div>
</section>
<!-- =============== END ABOUT US SECTION ================ -->

<!-- =============== START PROMOTIONS SECTION ============== -->
<section class="promotions-section">
    <div class="background"></div>
    <div class="overlay"></div>
    <div class="content">
        <div class="cards-container">
                <div id="cards">
                    <figure >
                        <img class="card floating" src="../storage/app/images/cards/front-6.svg" width="300.5px" height="187px" />
                    </figure> 
                    <figure>
                        <img class="card floating" src="../storage/app/images/cards/front-5.svg" width="300.5px" height="187px" />
                    </figure>
                </div>
        </div>
        
        <div class="promotions-container">
            <h1 class="animation-element fade-in"> <span> New Year </span> in Belgrade <span> ? </span> </h1>
            <!--
            <p>
                A <span> New Year's Eve </span> you are definitely going to remember!
                Belgrade is <span> THE </span> place to be when clock strikes 12,
                and <span> we are here </span> to make this happen.
            </p>
            -->
            <p id="promotion" class="animation-element fade-in" >
                Take a look at our
                <a class="light" href="#"> NEW YEAR LUXURY </a>
                and
                <a class="light" href="#"> NEW YEAR VIP LUXURY </a>
                packages, and don't forget to make <span> a wish </span> !
            </p>
        </div>
    </div>
</section>
<!-- =============== END PROMOTIONS SECTION ================ -->

<!-- =============== START PACKAGES SECTION ============== -->
<section id="content" class="packages-section">
    <div class="background">
        <div class="content">
            <div class="section-title animation-element fade-in">
              <h2> PACKAGES </h2>
              <div class="horizontal-line"></div>
            </div>
            
            <div class="section-description">
                <p class="animation-element fade-in">
                    Take a look at our <a class="light" href="#">special packages</a> that we have prepared for <span>You</span>. 
                    Each one has been carefully selected by 
                    <a class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 
                    team to meet <span>all of Your needs</span>.
                    Choose Your favorite, or <a class="light" href="#"> create one </a> according to Your taste.
                </p>
            </div>
            
            <div class="packages-container">
                <div class="previous-btn">
                    <img src="../storage/app/images/next.svg" />
                </div>
                <div class="next-btn">
                    <img src="../storage/app/images/next.svg" />
                </div>
                <div class="carousel-container">
                    <div id="carousel">
                        <figure id="0">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="../storage/app/images/cards/front-1.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/card-front-1.svg" class="card" height="227px" width="363.5px" />
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
                                        <img src="../storage/app/images/cards/front-2.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/1Zeng.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="2">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="../storage/app/images/cards/front-3.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/2Zeng.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="3">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="../storage/app/images/cards/front-4.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/3Zeng.png" class="card" height="227px" width="363.5px" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="4">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="../storage/app/images/cards/front-5.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/4Zeng.png" class="card" height="227px" width="363.5px" />
                                    </div>
                                </div>
                            </div> 
                        </figure>
                        <figure id="5">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="../storage/app/images/cards/front-6.svg" class="card" height="227px" width="363.5px" />
                                    </div>
                                    <div class="back">
                                        <img src="../storage/app/images/cards/5Zeng.png" class="card" height="227px" width="363.5px" />
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

<!-- =============== START EVENTS SECTION ================ -->
<section style="padding-bottom:0; padding-top:0;" class="events-section">
    <div class="background">
    <div class="content">
        <div class="section-title animation-element fade-in">
            <h2> EVENTS </h2>
            <div class="horizontal-line"></div>     
        </div>
        
        <div class="section-description">
                <p class="animation-element fade-in">
                    Here in <a class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> we are giving our best to make your stay in our city <span>unforgettable</span>.
                    If You are planning a trip to <a class="light">Belgrade</a>, you must not miss these <span>events</span>!
                    This is our <span>selected choice</span> of interesting happenings for the upcoming weeks.
                </p>
        </div>

		<div class="gallerySection">
			<div class="container-fluid" style="padding-bottom:0; margin-bottom: 100px;height:auto; display:inline-block;">
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
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
												<img class="" src="../storage/app/images/event4.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
												<img class="" src="../storage/app/images/event5.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
												<img class="" src="../storage/app/images/event6.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
												<img class="" src="../storage/app/images/event7.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
												<img class="" src="../storage/app/images/event3.jpg" alt="">
                                                                                                <div class="overlay">
                                                                                                    </div>
                                                                                                <div class=" eventinfo">
                                                                                                    <div class="event-content">
                                                                                                    	<div class="shopHover">
                                                                                                                <div class="price">
                                                                                                                        <img class="eventklub" src="../storage/app/images/klublogo.png" alt="">
                                                                                                                </div>
                                                                                                            <div class="lajna"></div> 
                                                                                                                <div  class="proTitle">
                                                                                                                        Summer Jam
                                                                                                                </div>
                                                                                                                <div class="proSubtitle">Hosted by DJ Arhitect</div>
                                                                                                                <div class="stasveima">
                                                                                                                    <img class="slicice" src="../storage/app/images/disko.png" alt="" >
                                                                                                                     <img class="slicice" src="../storage/app/images/kibla.png" alt="">
                                                                                                                      <img class="slicice" src="../storage/app/images/koktel.png" alt="">
                                                                                                                </div>
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
<!-- =============== START QUOTE SECTION ============== -->
<section class="quote-section">
    <div class="background">
        <div class="content">
            <div class="wrapper" >
                <div class="ribbon">
                 <blockquote class="center-quote animation-element fade-in">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    <cite>Somebody famous</cite>
                  </blockquote>
                </div>
            </div>
        </div>
    </div>
  
</section>  
<!-- =============== END QUOTE SECTION ============== -->
<!-- =============== START BENEFITS SECTION ============== -->
<section class="benefits-section">
    <div class="section-title animation-element fade-in">
          <h2> CLIENT EXPERIENCE </h2>
          <div class="horizontal-line"> </div>
             </div>
          <div class="section-description">
                <p class="animation-element fade-in">
                    Take a look at our <a class="light" href="#">special packages</a> that we have prepared for <span>You</span>. 
                    <a class="light belux-logo">BELGRADE<span style="color: #bb9b50; font-style: normal">LUXURY</span></a> 

                </p>
            </div>
    
    <div class="stage">


	<div id="SLDR-ONE" class="sldr">
		<ul class="wrp animate">
			<li class="elmnt-one"><div class="skew"><div class="wrap"><img src="../storage/app/images/clients/Klijent1engleski.png"></div></div></li>
			<li class="elmnt-two"><div class="skew"><div class="wrap"><img src="../storage/app/images/clients/Klijent2engleski.png" ></div></div></li>
			<li class="elmnt-three"><div class="skew"><div class="wrap"><img src="../storage/app/images/clients/Klijent3engleski.png" ></div></div></li>
			<li class="elmnt-four"><div class="skew"><div class="wrap"><img src="../storage/app/images/clients/Klijent4engleski.png" ></div></div></li>
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


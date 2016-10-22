<!DOCTYPE html>

@extends('layouts.master')

@section('scripts')
<!-- ubaciti sve css i js fajlove potrebne za home page -->
@stop

@section('content')
<!-- za sve ove klase treba napisati css -->
<div class="video-section [widescreen]">
    
<iframe frameborder="0" scrolling="no" seamless="seamless" webkitallowfullscreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen" id="playerId" src='https://www.youtube.com/embed/FLKXSgXNl8w?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&controls=0&loop=1&modestbranding=1'></iframe>
    
    <script type="text/javascript">
       var player;
        function onYouTubeIframeAPIReady()
        {player=new YT.Player('playerId',{events:{onReady:onPlayerReady}})}
        function onPlayerReady(event){player.mute();player.setVolume(0);player.playVideo();}
       </script>
       
    <div class="overlay"></div>
    
 
        <h1> VIP EXPERIENCE BELGRADE NIGHTLIFE</h1> 
        <h2 class="quotes"> Belgrade Luxury</h2>
        <h2 class="quotes">VIP PLACES</h2>
        <h2 class="quotes">Luxury apartments</h2>
 
        <a href="#aboutus"><h3><img classs="dijamant" src="../storage/app/images/aboutus.png" style="width: 5%; "></h3></a>
</div>

<div class="about-us-section">
    <div id="aboutus"> <h2>About Us</h2> </div>
    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,<br> and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
    <span> 
           <img classs="dijamant" src="../storage/app/images/dijamantlevo.png" style="width: 10%; float:left">
           <h2>LUXURY AUTOMOBILE</h2>
           <img classs="dijamant" src="../storage/app/images/dijamantdesno.png"style="width: 10%; float:right">
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

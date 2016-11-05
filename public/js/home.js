/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// scroll header
$(window).on("scroll", function() {
    if($(window).scrollTop() > $('#aboutus').offset().top) {
        $(".ha-header").addClass("ha-non-transparent");
        $(".ha-header").removeClass("ha-transparent");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".ha-header").removeClass("ha-non-transparent");
       $(".ha-header").addClass("ha-transparent");
    }
});

// about us link
$(window).on("load", function() {
    
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top + 2
            }, 1000);
            return false;
        }
    });
    
});
  
  /* changing quotes on video */
$(window).on("load", function() {
    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(1000)
            .delay(1000)
            .fadeOut(1000, showNextQuote);
    }

    showNextQuote();
}); 

/* video-section */
var player;
function onYouTubeIframeAPIReady()
{
    player = new YT.Player('playerId', {
        events: {
            onReady:onPlayerReady
        }
    });
}
function onPlayerReady(event) {
    player.mute();
    player.setVolume(0);
    player.playVideo();
}

/* packages-section */
var isLaptop = false;
var isMobile = false;

function checkMedia() {
    if (window.matchMedia) {
        isLaptop = window.matchMedia('(min-width: 768px)').matches;
        isLaptop = isLaptop && window.matchMedia('(max-width: 1120px)').matches;
        if (!isLaptop)
            isMobile = window.matchMedia('(max-width: 767px)').matches;
    } else {
        isLaptop = screen.width >= 768 && screen.width <= 1120 ;
        if (!isLaptop)
            isMobile = screen.width < 768;
    }
}
    
$(window).on("resize", function() {
   checkMedia();    
});


$(window).on("load", function() {
    // reflections
    var $cards = $('.card');
    $.each($cards, function() {
        var $element = $(this);
        $element.reflect({
            height: 0.5,
            opacity: 0.1
        });
    });
    
    // flip
    var $front = $('.flip-container .flipper .front .card img');
    $front.on("mouseenter mouseleave", function(ev) {
        ev.preventDefault();
        var $flipper = $(this).closest(".flipper");
        if ($flipper.closest("figure").attr("id") == 0) {
            $flipper.css({
                "-webkit-transform" : "rotateX(-180deg)",
                transform: "rotateX(-180deg) scale(1.3) translateX(40px)"
            });
        }
    });
    
    // flip back
    var $back = $('.flip-container .flipper .back');
    $back.on({
        mouseleave: function() {
            var $flipper = $(this).closest(".flipper");
            if ($flipper.closest("figure").attr("id") == 0) {
                $flipper.css({
                    "-webkit-transform" : "rotateX(0deg)",
                    transform: "rotateX(0deg)"
                })  
            }
        }
    });   
});

// rotate ring
$(window).on("load", function() {
    //var ids = { id: ["front", "right-front", "right-back", "back", "left-back", "left-front"] };
    var translateD = { value: ["0, 0, 0", "440px, 0, -20px", "240px, 0, -40px", "0, 0, -60px", "-240px, 0, -40px", "-440px, 0, -20px"] };
    var scaleD = { value: ["1", "0.65", "0.4", "0.25", "0.4", "0.65"] };
    var translateL = { value: ["0, 0, 0", "270px, 0, -20px", "135px, 0, -40px", "0, 0, -60px", "-135px, 0, -40px", "-270px, 0, -20px"] };
    var scaleL = { value: ["0.78", "0.58", "0.3", "0.2", "0.3", "0.58"] };
    var opacity = { value: ["1", "1", "0.9", "0.9", "0.9", "1"] };
    
    checkMedia();
    
    $('#carousel figure').on('click', function(ev) {
        ev.preventDefault();
        // $(this).css("background", "blue");       
        var figures = $('#carousel figure');
        var id = parseInt($(this).attr("id"));
        var delay_time = 0;
        
        if (id == 0) {
            // kliknut sredisnji
            var $flipper = $(this).find(".flipper");
            $flipper.css({
                "-webkit-transform" : "rotateX(180deg)",
                transform: "rotateX(180deg)"
            });
            return;
        }
        
        $.each(figures, function() {
            var $element = $(this);
            var $curr_id = parseInt($element.attr("id"));
            // flip back the center one
            if ($curr_id == 0) {
                var $flipper = $element.find(".flipper");
                $flipper.css({
                    "-webkit-transform" : "rotateX(0deg)",
                    transform: "rotateX(0deg)"
                })  
            };
        });
        
        if (id == 2 || id == 4) {           
            $.each(figures, function() {
                var $element = $(this);
                var $curr_id = parseInt($element.attr("id"));
                var $new_id;
                if (id == 2)
                    $new_id = ($curr_id - 1 + 6) % 6;
                else if (id == 4)
                    $new_id = ($curr_id + 1) % 6;
                $element.attr("id", $new_id);
                if (isLaptop) {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        "transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });    
                } else {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        "transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });
                }
            });
            if (id == 2) id = 1;
            if (id == 4) id = 5;
            delay_time = 500;          
        }
         
        $.each(figures, function() {
            var $element = $(this);
            var $curr_id = parseInt($element.attr("id"));
            var $new_id = ((6 - id) + $curr_id) % 6;
            $element.attr("id", $new_id);
            $element.delay(delay_time).queue(function (next) { 
                if (isLaptop) {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        "transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });
                } else {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        "transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });
                }
                
                next(); 
            });                        
        });
        
    });
    
    /*
    var $se = $('#0');
    $se.on("swiperight", function() {
        var figures = $('#carousel figure');
        var delay_time = 0;
        $.each(figures, function() {
            var $element = $(this);
            var $curr_id = parseInt($element.attr("id"));
            var $new_id = ((6 - 1) + $curr_id) % 6;
            $element.attr("id", $new_id);
            $element.delay(delay_time).queue(function (next) { 
                if (isLaptop) {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        "transform": "translate3d(" + translateL.value[$new_id] + ") scale(" + scaleL.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });
                } else {
                    $element.css({
                        "-webkit-transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        "transform": "translate3d(" + translateD.value[$new_id] + ") scale(" + scaleD.value[$new_id] + ")",
                        opacity: opacity.value[$new_id]
                    });
                }
                
                next(); 
            });                        
        });
    });
    */
});



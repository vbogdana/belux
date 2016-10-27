/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
  
  /* changing quotes on video */
$(function() {
    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);
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
    })
}
function onPlayerReady(event) {
    player.mute();
    player.setVolume(0);
    player.playVideo();
}

/* packages-section */
$( document ).ready(function() {
    // reflections
    var $cards = $('.card');
    $.each($cards, function() {
        var $element = $(this);
        $element.reflect({
            height: 0.5,
            opacity: 0.2
        });
    })
    
    
    
})

$(function() {
    //var ids = { id: ["front", "right-front", "right-back", "back", "left-back", "left-front"] };
    var translate = { value: ["0, 0, 0", "440px, 0, -20px", "240px, 0, -40px", "0, 0, -60px", "-240px, 0, -40px", "-440px, 0, -20px"] };
    var scale = { value: ["1", "0.75", "0.4", "0.3", "0.4", "0.75"] };
    $('#carousel figure').on('click', function(ev) {
        ev.preventDefault();
        // $(this).css("background", "blue");       
        var figures = $('#carousel figure');
        var id = parseInt($(this).attr("id"));
        var delay_time = 0;
        
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
                $element.css({
                    "-webkit-transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                    "transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                });
            })
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
                $element.css({
                    "-webkit-transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                    "transform": "translate3d(" + translate.value[$new_id] + ") scale(" + scale.value[$new_id] + ")",
                });
                next(); 
            });                        
        })
        
    })
    
    
    // flip
    var $front = $('.flip-container .flipper .front .card img');
    $front.on("mouseenter mouseleave", function(ev) {
        ev.preventDefault();
        var $flipper = $('.flip-container .flipper');
        $flipper.css({
            "-webkit-transform" : "rotateX(-180deg)",
            transform: "rotateX(-180deg)"
        })
    })
    
    var $back = $('.flip-container .flipper .back ');
    $back.on({
        mouseleave: function() {
            var $flipper = $('.flip-container .flipper');
            $flipper.css({
                "-webkit-transform" : "rotateY(0deg)",
                transform: "rotateY(0deg)"
            })   
        }
    })
})
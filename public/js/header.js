/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    var pull = $('#pull');
    menu = $('ul.top-nav-menu');
    menuHeight  = menu.height();
 
  $(pull).on('click', function(e) {
    e.preventDefault();
    if (menu.is(':hidden'))
        $('.ha-header').css("background", "rgb(2,2,2)");
    else
        $('.ha-header').removeAttr('style');
    menu.slideToggle();
    
  });
});

$(window).resize(function(){
  var w = $(window).width();
  if(w > 320 && menu.is(':hidden')) {
    menu.removeAttr('style');
  }
}); 

$(function () {
    var logo = $('#site-logo');
    $(logo).on({
        mouseenter: function () {
            logo.fadeIn();
            logo.attr('src', '../storage/app/images/logo1.png');
        },
        mouseleave: function () {
            logo.fadeIn();
            logo.attr('src', '../storage/app/images/logo2.png');
        }
    });
});


function showMenu(hidden) {
    if (hidden === false) {
        $('.top-nav-item').css("visibility", "hidden");
        $('.top-nav-separator').css("visibility", "hidden");
    } else {
        $('.top-nav-item').css("visibility", "visible");
        $('.top-nav-separator').css("visibility", "visible");
    }
    hidden = !hidden;
}
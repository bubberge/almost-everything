/* jshint laxcomma: true */

var wind = $(window)
  , $headSpace = $('.row.heading').height()
  , $body = $('.body-content.About').height() - $headSpace
  , $content = $('.row.content.about')
  , $header = $('#widemenu').height()
  , height = wind.height();

function clearClasses (element) {
    element.removeClass('_1_lw _2_uw _3_jh _4_cc _5_me');
}

function scrollTracker(e) {
    if ( wind.scrollTop() > 20 && wind.scrollTop() < ($body*.17)-$header ) {
        clearClasses($content);
        $content.addClass('_1_lw');
    }
    if ( wind.scrollTop() > ($body*.18)-$header && wind.scrollTop() < ($body*.34)-$header ) {
        clearClasses($content);
        $content.addClass('_2_uw');
    }
    if ( wind.scrollTop() > ($body*.35)-$header && wind.scrollTop() < ($body*.51)-$header ) {
        clearClasses($content);
        $content.addClass('_3_jh');
    }
    if ( wind.scrollTop() > ($body*.52)-$header && wind.scrollTop() < $body*.66) {
        clearClasses($content);
        $content.addClass('_4_cc');
    }
    if ( wind.scrollTop() > $body*.67) {
        clearClasses($content);
        $content.addClass('_5_me');
    }
}

// do things
console.log('new script.js');
$(document).ready(function(){
    wind.scroll( function(){ 
        console.log('scroll');
        scrollTracker();
    });
});


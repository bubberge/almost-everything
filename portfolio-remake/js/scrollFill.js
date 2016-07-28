/* jshint laxcomma: true */

var wind = $(window)
    , $content = $('.about.content')
    , height = wind.height()
    , heightBumper = (height/2)
    , $scrollContent = $('.scrollContent')
    , $compass = $('#compass')
    , $download = $('#download')
    , $notification = $('#notification');


function scrollTracker(e) {
    if ( wind.scrollTop() > 20 ) {
        $content.removeClass('_2_uw').addClass('_1_lw');
    }
    if ( wind.scrollTop() > heightBumper ) {
        $content.removeClass('_1_lw').addClass('_2_uw');
    }
    if ( wind.scrollTop() > ( height) ) {
        $content.removeClass('_2_uw').addClass('_3_jh');
    } else {
        $content.removeClass('_3_jh');
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


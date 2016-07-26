/* jshint laxcomma: true */

var wind = $(window)
    , $content = $('.about.content')
    , height = wind.height()
    , $compass = $('#compass')
    , $download = $('#download')
    , $notification = $('#notification');


function scrollTracker(e) {
    if ( wind.scrollTop() > height/2 ) {
        $content.addClass('gray');
    } else {
        $content.removeClass('gray');
    }
    if ( wind.scrollTop() > height ) {
        $content.removeClass('gray').addClass('orange');
    } else {
        $content.removeClass('orange');
    }
}
console.log('script.js');

$(document).ready(function(){
    wind.scroll( function(){ 
        console.log('scroll');
        scrollTracker();
    });
});
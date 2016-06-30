var wind = $(window);
var nav = $('#header-bar');
var jumbo_height = $('.jumbotron-background').height() - 18;
function stickyScroll(e){
    if ( wind.scrollTop() > (jumbo_height) ) {  //114%
        nav.addClass('inverted');
    }

    if ( wind.scrollTop() < (jumbo_height) ) {
        nav.removeClass('inverted');
    }

}
wind.scroll( function(){ stickyScroll(); });


$('a.page-scroll').click( function( event ) {
        event.preventDefault();
        console.log('click');
        var $anchor = $(this);
        $('html, body').animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 24 )
        }, 450 );
    });



console.log('user.js');
var wind = $(window);
var height = wind.height();
var $nav = $('#header-bar');
var $services = $('#services');
var $people = $('#people');
var $work = $('#work');
var jumbo_height = $('.jumbotron-background').height() - 18;


function stickyScroll(e){
    if ( wind.scrollTop() > (jumbo_height) ) {  //114%
        $nav.addClass('inverted');
    }

    if ( wind.scrollTop() < (jumbo_height) ) {
        $nav.removeClass('inverted');
    }

    if ( wind.scrollTop()+wind.height() > $services.offset().top ) {
        $services.addClass('fade-in-down-delay');
    }

    if ( wind.scrollTop()+wind.height() > $people.offset().top ) {
        $people.addClass('fade-in-down-delay');
    }

    if ( wind.scrollTop()+wind.height() > $work.offset().top ) {
        $work.addClass('fade-in-down-delay');
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
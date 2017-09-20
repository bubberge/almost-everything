/* jshint laxcomma: true */
$(document).foundation();

var $home = $('.home')
  , $slickGallery = $('.s-container')
  , $slickAbout = $('.a-slide')
  ;

if ( $home[0] ) {
    home();
} else if ( $slickGallery[0] ) {
    slickGallery();
} else if ( $slickAbout[0] ) {
    slickAbout();
}


function home(){ // removes images that aren't good for small and then inits slick on home
    // console.log('home slick');
    var $jumbo = $('.j-background');
    $('.j-track').slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 700,
        fade: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000
    });

    

    (function getFeed(url, container){
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url);
      xhr.send(null);
      xhr.onreadystatechange = function () {
        var DONE = 4; // readyState 4 means the request is done.
        var OK = 200; // status 200 is a successful return.
        if (xhr.readyState === DONE) {
          if (xhr.status === OK) {
            var response = JSON.parse(xhr.responseText); // 'This is the returned text.'
            // console.log(response);
            var finalHTML = '';
            response.forEach(function(current, index){
              var thehtml = '<div class="b-post"><div class="b-title">';
              var str = current.title.rendered;
              // console.log(`titles before:`)
              // console.log(titles);
              if (str.indexOf(' | ') !== -1) {
                  var splitStrings = str.split(' | ');
                  // console.log(splitStrings)
                  thehtml += '<h3 class="b-post__title">'+splitStrings[0]+ '</h3>';
                  thehtml += '<span>'+splitStrings[1]+'</span>';
              } else {
                  thehtml += '<span>'+str+'</span>';
              }
              thehtml += '</div><div class="b-background" style="background-image: url(';
              // console.log(`titles after`);
              // console.log(titles);
              var s = current.content.rendered.slice(0,300);
              var image = s.slice((s.indexOf('href=\"')+6),(s.indexOf('.jpg\"')+4));
              thehtml += image + ')"></div><span class="b-overlay"></span><a class="b-link" href="' +current.link+'" target="_blank"></a></div>';
              finalHTML += thehtml;;
              // console.log(the_html);
            })
            $('#blogLoc').removeClass('link-style');
            $(container).html('');
            $(container).append(finalHTML);
          } else {
            console.error('Error: ' + xhr.status); // An error occurred during the request.
          }
        }
      };
    })('http://blog.amygalbraith.com/wp-json/wp/v2/posts?per_page=8','.blog-feed');
}

function slickGallery(){
    //console.log('gallery slick');
    $('.s-container').slick({
        dots: false,
        infinite: true,
        speed: 700,
        fade: true,
        centerMode: true,
    });
}

function slickAbout(){
    //console.log('about slick');
    $('.a-slide').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: false,
        variableWidth: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1
              }
            }
        ]
    });
}

var wind = $(window);
var height = wind.height();
var $nav = $('.title-bar');
var $jumboHome = $('.home .j-background');
var $notHome = $('body').not('.home');
var scrollToggle = true;
var scrollTimer = null;

function stickyScroll(e){
    if ( $jumboHome.height() ) {
        if ( wind.scrollTop() > $jumboHome.height() ) {  //114%
            $nav.addClass('stuck');
        }

        if ( wind.scrollTop() <= $jumboHome.height() ) {
            $nav.removeClass('stuck');
        }
    }
    if ( $notHome.height() ) {
        if ( wind.scrollTop() > 0 ) {
            $nav.addClass('stuck');
        }
        if ( wind.scrollTop() <= 0 ) {
            $nav.removeClass('stuck');
        }
    }
}

wind.scroll(function () {
    if (scrollTimer) {
        clearTimeout(scrollTimer);   // clear any previous pending timer
    }
    scrollTimer = setTimeout(stickyScroll(), 20);   // set new timer
});

function smoothScroll (selector) {
    $(selector).click( function( event ) {
        event.preventDefault();
        console.log('click');
        var $anchor = $(this);
        if ( $nav.width() < 640 ) {
            $('html, body').animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 40 )
            }, 350 );
        } else {
            $('html, body').animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 120 )
            }, 350 );
        }
    });
}

smoothScroll('#page-scroll');
smoothScroll('.home #port-link');
smoothScroll('.home #blog-link');

// automatically closes the off-canvas menu when an option is selected
$(".off-canvas a").mouseup( function(){
  $(".close-button").click();
});

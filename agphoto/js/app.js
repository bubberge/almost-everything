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
    console.log('home slick');
    var $jumbo = $('.j-background');
    $('.j-track').slick({
        dots: true,
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000
    });

    /**
     * parses any RSS/XML feed through Google and returns JSON data
     * source: http://stackoverflow.com/a/6271906/477958
     */

    (function parseRSS(url, container) {
        // console.log(parseRSS);
        var $outputContainer = $(container);
        var finalHTML = '';
        $.ajax({
            url: document.location.protocol + "//feedrapp.info?v=1.0&num=10&callback=?&q=" + encodeURIComponent(url),
            dataType: 'json',
            success: function(data) {
                // console.log(data.responseData.feed);
                $.each(data.responseData.feed.entries, function(key, value){
                    if ( key < 8) {
                        var thehtml = '<div class="b-post"><div class="b-title">';
                        var str = value.title;
                        // console.log(typeof str);
                        if (str.indexOf(' | ') !== -1) {
                            var splitStrings = str.split(' | ');
                            $.each(splitStrings,function(index, value){
                                thehtml += '<span>'+value+'</span>';
                            });
                        } else {
                            thehtml += '<span>'+str+'</span>';
                        }
                        thehtml += '</div><div class="b-background" style="background-image: url(';
                        var s = value.content;
                        s = s.slice(0,s.indexOf(".jpg") + 4 );
                        s = s.slice(s.indexOf("src=") + 5);
                        console.log(s); 
                        thehtml += s + ')"></div><span class="b-overlay"></span><a class="b-link" href="' +value.link+'" target="_blank"></a></div>';
                        finalHTML += thehtml;
                    }
                });
                $('#blogLoc').removeClass('link-style');
                $outputContainer.html('');
                $outputContainer.append(finalHTML);
            }
        });
    })('http://blog.amygalbraith.com/feed','.blog-feed');
}

function slickGallery(){
    console.log('gallery slick');
    $('.s-container').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        lazyLoad: 'ondemand'
    });
}

function slickAbout(){
    console.log('about slick');
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


/*
 * Uses AJAX to load JSON and then builds markup for slideshow


 function createGallery( container, fileExt ) {   
    var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("application/json");
    xobj.open('GET', fileExt, true); // Replace 'my_data' with the path to your file
    xobj.onreadystatechange = function () {
          if (xobj.readyState == 4 && xobj.status == "200") {
            var $container = $(container);
            var jsonFile = JSON.parse(xobj.responseText);
            for ( var i = 0; i < jsonFile.slides.length; i++ ){
                theHTML = '<div class="s-slide"><div class="s-overlay"></div><img src="';
                theHTML += jsonFile.slides[i].url;
                theHTML += '" alt="';
                theHTML += jsonFile.slides[i].alt;
                theHTML += '" /></div>';
                $container.append(theHTML);
            }
            slickInit();
            console.log('gallery loaded');
          }
    };
    xobj.send(null);  
 }

createGallery('.weddings .s-container', 'img/weddings/weddings.json');
 */

$(document).foundation();

(function slickInit(){
    $('.s-container').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        initialSlide: 0,
        centerMode: true,
        variableWidth: true,
        lazyLoad: 'ondemand'
    });
})();

/**
 * parses any RSS/XML feed through Google and returns JSON data
 * source: http://stackoverflow.com/a/6271906/477958
 */
(function parseRSS(url, container) {
    var $outputContainer = $(container);
    $.ajax({
        url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
        dataType: 'json',
        success: function(data) {
            //console.log(data.responseData.feed);
            $.each(data.responseData.feed.entries, function(key, value){
                if ( key < 8) {
                    var thehtml = '<div class="b-post"><div class="b-title">';
                    var str = value.title;
                    if (str.includes(' | ')) {
                        var splitStrings = str.split(' | ');
                        $.each(splitStrings,function(index, value){
                            thehtml += '<span>'+value+'</span>';
                        });
                    } else {
                        thehtml += '<span>'+str+'</span>';
                    }
                    thehtml += '</div><div class="b-background" style="background-image: url(';
                    var s = value.content;
                    var temp = document.createElement('div');
                    temp.innerHTML = s;
                    thehtml += temp.firstChild.getAttribute("src") + ')"></div><span class="b-overlay"></span><a class="b-link" href="' +value.link+'" target="_blank"></a></div>';
                    // var thumbnail = temp.firstChild;
                    // thehtml += thumbnail;
                    $outputContainer.append(thehtml);
                }
            });
        }
    });
})('http://blog.amygalbraith.com/feed','.blog-feed');


var wind = $(window);
var height = wind.height();
var $nav = $('.title-bar');
var $jumbo = $('.j-overlay-background');
var scrollToggle = true;
var scrollTimer = null;

function stickyScroll(e){
    if ( wind.scrollTop() > $jumbo.height() ) {  //114%
        $nav.addClass('stuck');
    }

    if ( wind.scrollTop() < $jumbo.height() ) {
        $nav.removeClass('stuck');
    }
}

wind.scroll(function () {
    if (scrollTimer) {
        clearTimeout(scrollTimer);   // clear any previous pending timer
    }
    scrollTimer = setTimeout(stickyScroll(), 20);   // set new timer
});


$('#page-scroll').click( function( event ) {
    event.preventDefault();
    console.log('click');
    var $anchor = $(this);
    if ( $jumbo.width() < 640 ) {
        $('html, body').animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 40 )
        }, 350 );
    } else {
        $('html, body').animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 120 )
        }, 350 );
    }
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

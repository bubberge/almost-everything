$(document).foundation()

$('.nav-mobile a').click(function( e ){ // animate mobile navigation clicks
    e.preventDefault();
    var href = this.href;
    console.log(href);
    $('#splash').toggleClass('fade-out-up');
    setTimeout(function() {window.location = href;}, 700);
});
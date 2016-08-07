/* jshint laxcomma:true */
var hoverSplits = true
  , $leaves = $('.leaf')
  , $results = $('.results')
  , $toggleButton = $('#toggle')
  , $resetButton = $('#reset')
  , $reverseText = $('#inReverse')
  , totalCircles = $leaves.length
  , leavesTemplate = '<div class="leaf"></div><div class="leaf"></div><div class="leaf"></div><div class="leaf"></div>'
  , reverseTemplate = '<button id="reverse">Reverse</button>'
  , $startingTemplate = '<div class="outer-box leaf"></div><div class="outer-box right parent inter"><div class="leaf"></div><div class="leaf"></div><div class="leaf"></div><div class="leaf"></div></div>'
  , $container = $('.circleGen-container')
  ;

 var reverse = function(){
  hoverSplits = !hoverSplits;
  $reverseText.removeClass('hide');
  $toggleButton.text('Reversed! Better hurry...');
  $toggleButton.toggleClass('fade-in-down fade-out-up-delay');
  console.log('var hoverSplits = ' + hoverSplits + '.');
};

var reset = function(){
  $leaves.unbind('mouseover');
  $container.html( $startingTemplate );
  $leaves = $('.leaf');
  totalCircles = $leaves.length;
  $results.text(totalCircles);
  $leaves.on('mouseover', splitter);
};

var splitter = function(){
  var $this = $(this)
    , $parent = $this.parent() 
    ; 
  
  if (totalCircles > 302) {
    $toggleButton.addClass('fade-in-down');
  }
  
  if ( hoverSplits ){
    totalCircles += 4;
    $parent.removeClass('inter');  
    $this.addClass('parent inter').removeClass( 'leaf').append(leavesTemplate);  
    $this.unbind('mouseover').find('.leaf').on('mouseover', splitter);  
  } else if ($parent.hasClass('inter')){
    totalCircles -= 4;
    $parent.removeClass('inter parent').addClass('leaf');
    $parent.html('');
    $parent.parent().addClass('inter');
    $this.unbind('mouseover').find('.inter').on('mouseover', splitter);
  }

  $results.text(totalCircles);

};

function initTimer( circles ){
    var timeLeft = circles*(100)
      , $minutes = $('.minutes')
      , $seconds = $('.seconds')
      , timeinterval = setInterval( function(){
        var t = getTimeRemaining( timeLeft );
        $minutes.html('0' + t.minutes).slice(-2);
        $seconds.html('0' + t.seconds).slice(-2);
        timeLeft -= 1000;
        if(timeLeft<0){
            clearInterval(timeinterval); // stops timer
        }
    },1000);
}

var getTimeRemaining = function(input){
    var t = input
      , seconds = Math.floor( (t/1000) % 60 )
      , minutes = Math.floor( (t/1000/60) % 60 )
    ;
    return {
        'minutes': minutes,
        'seconds': seconds
    };
};

$leaves.on( 'mouseover', splitter );
$resetButton.on( 'click', reset );
$toggleButton.on('click', reverse );
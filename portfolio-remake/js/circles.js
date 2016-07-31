$(document).foundation();

var hoverSplits = true
  , $leaves = $('.leaf')
  , $results = $('.results')
  , $toggleButton = $('#toggle')
  , $resetButton = $('#reset')
  , $reverseText = $('#inReverse')
  , totalCircles = $leaves.length
  , leavesTemplate = '<div class="leaf"></div><div class="leaf"></div><div class="leaf"></div><div class="leaf"></div>'
  , reverseTemplate = '<button id="reverse">Reverse</button>'
  , $startingTemplate = $('.circleGen-container > div')
  , $container = $('.circleGen-container')
  ;

 var reverse = function(){
  hoverSplits = !hoverSplits;
  $reverseText.removeClass('hide');
  $toggleButton.text('Reversed! Hover on...');
  $toggleButton.toggleClass('fade-in-down fade-out-up-delay');
  console.log('var hoverSplits = ' + hoverSplits + '.');
};

var reset = function(){
  $container.html( $startingTemplate );
};

var splitter = function(){
  var $this = $(this)
    , $parent = $this.parent() 
    ; 
  
  if (totalCircles == 302) {
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

$leaves.on( 'mouseover', splitter );
$resetButton.on( 'click', reset );
$toggleButton.on('click', reverse );
/* jshint laxcomma: true */
/* use strict            */

$(document).ready(function(){
    var $container = $('.flower')
      , $leaves = $('.flower > *')
      , $leaf = $('.flower > *:first-child')
      , $trigger = $('#trigger')
      ;
    
    function animateFlower(){
        $leaves.toggleClass('animate');
    }

    $container.hover(animateFlower);
    $trigger.click(animateFlower);
        
    $leaf.on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e) {
        $leaves.removeClass('animate');
        if ($leaves.hasClass('end')) {
            $leaves.removeClass('end');
        } else {
            $leaves.addClass('end');
        }
    });

    function getRGBs (arr1, arr2, steps){
        var stepsArr = []
          , outputArr = []
          ;

        // get the differences between array values and put them in order into an array
        for (var i = 0; i < arr1.length; i++ ){
            stepsArr.push(Math.abs(arr1[i] - arr2[i]) / (steps - 1));
        }

        // for each step
        for (var j = 0; j < steps; j++) {

            // create an array for the RGB value of that step
            var anonArr = [];

            // loop through the steps array
            for (var k = 0; k < stepsArr.length; k++) {

                // determine if the first number is smaller than the second
                if (arr2[k] >= arr1[k]){

                    // push to the RGB array for this step
                    anonArr.push(~~(arr1[k] + (stepsArr[k] * j)));
                } else {
                    anonArr.push(~~(arr1[k] - (stepsArr[k] * j)));
                }
            }

            // push the RGB step array to the final array
            outputArr.push(anonArr);
        }
        
        // build and return an object with the relevant data
        var foo = { "steps" : steps,
                    "eachStep" : stepsArr,
                    "outputRGBs": outputArr
                  };
        return foo;
    }
});
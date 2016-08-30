/* jshint laxcomma: true */

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
    return outputArr;
}

$(document).ready(function(){  
    var $container = $('.flower')
      , $leaves = $container.find('*')
      , $leaf = $container.find('*:first-child')
      , $start = $('#start')
      , $stop = $('#stop')
      , requestID
      , rotationCSS
      , degrees = 0
      ;
    
    function animate(){
        requestID = requestAnimationFrame(animate);
        rotationCSS = 'rotateZ(' + degrees.toString() + 'deg)';
        $leaf.css("transform", rotationCSS );
        degrees += 1;
    }

    function stopAnimation(){
        cancelAnimationFrame(requestID);
    }

    $start.click(animate);
    $stop.click(stopAnimation);

});

// get first RGB value
// get second RGB value
// get number of steps
// calculate number of degrees between each step
// get RGB values for each step
// get initial location of each petal
// get final location of each petal
// run rAF from 0 until petal-1 hits the correct stopping point
    // stop animation
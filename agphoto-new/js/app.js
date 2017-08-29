// off-canvas menu init
(function(){
  function toggleClassMenu() {
      myMenu.classList.add("off-canvas--animatable");   
      if(!myMenu.classList.contains("off-canvas--visible")) {       
          myMenu.classList.add("off-canvas--visible");
      } else {
          myMenu.classList.remove('off-canvas--visible');       
      }   
  }

  function OnTransitionEnd() {
      myMenu.classList.remove("off-canvas--animatable");
  }

  var myMenu = document.querySelector(".off-canvas");
  var oppMenu = document.querySelector(".header__trigger");
  myMenu.addEventListener("transitionend", OnTransitionEnd, false);
  oppMenu.addEventListener("click", toggleClassMenu, false);
  myMenu.addEventListener("click", toggleClassMenu, false);
})();

if ( document.querySelector('.slideshow--splash') ) {
  // homepage slideshow
  var slides = {
    all             : Array.from(document.querySelectorAll('[data-radio-index]')),
    current         : 0,
    intervalRunning : false,
    intervalID      : null,
    autoRotate      : function( flag ){

                        // no interval running, start new interval
                        if ( flag && !slides.intervalRunning ) {
                          slides.intervalID = setInterval(function() {
                            slides.changeSlide();
                          }, 5000);
                          slides.intervalRunning = true;

                        // killing existing interval
                        } else if ( !flag ) {
                          clearInterval(slides.intervalID);
                          slides.intervalRunning = false;

                        // do nothing, interval already running
                        } else {
                          // for slideshow navigation spammers
                        }
                      },
    clear           : function() {
                        for ( var i = 0; i < slides.all.length; i++ ) {
                          slides.all[i].checked = false;
                        }
                      },
    increment       : function(){
                        if (slides.current == (slides.all.length - 1)) {
                          slides.current = 0;
                        } else {
                          slides.current++;
                        }
                      },
    changeSlide     : function() {
                        slides.increment();
                        slides.clear();
                        slides.all[slides.current].checked = true;
                      },
    handleUserClick : function(elem) {
                        slides.current = parseFloat(elem.dataset.radioIndex);
                        slides.autoRotate(false);
                        // give user two extra seconds to look at that picture
                        setTimeout(function(){
                          slides.autoRotate(true)}, 2000);
                      },
    initUserClicks  : function(arr){
                        for ( var i = 0; i < arr.length; i++) {
                          arr[i].addEventListener('click', function(){
                            slides.handleUserClick(this);
                          })
                        };
                      }
  }
  slides.autoRotate(true);
  slides.initUserClicks(slides.all);
}

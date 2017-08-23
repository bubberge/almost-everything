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

// homepage slideshow
const slides = {
  all         : Array.from(document.querySelectorAll('[data-radio-index]')),
  checked     : function(){
    return slides.all.filter(current => current.checked)[0].getAttribute('ID');
  },
  rotate      : function() {

  },
  clear       : function() {
    for ( let i of slides.all ) {
      i.checked = false;
    }
  }
}

// transition class to next dom node


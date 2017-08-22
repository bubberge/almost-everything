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
var oppMenu = document.querySelector(".off-canvas__trigger");
myMenu.addEventListener("transitionend", OnTransitionEnd, false);
oppMenu.addEventListener("click", toggleClassMenu, false);
myMenu.addEventListener("click", toggleClassMenu, false);

// on page load
window.onload = function() {

  // pushnav toggle
  // select trigger id's
  var pushTriggers = document.querySelectorAll('#uu-pushmenu-trigger, #mobile-close-nav');
  // loop through each trigger
  for(var i = 0; i < pushTriggers.length; i++) {
    pushTriggers[i].addEventListener('click', pushNav);
  };
  // toggle classes to push body/nav
  function pushNav(event) {
    event.preventDefault();
    document.querySelector('.uu-body').classList.toggle('uu-body-pushbody-left');
    document.querySelector('.uu-main-nav').classList.toggle('uu-main-nav-open');
    document.querySelector('.page-container').classList.toggle('uu-body-pushbody-left');
    document.querySelector('#uu-pushmenu-trigger').classList.toggle('is-active');
  };


};


// Page Loader Vars
const pageLoader = document.querySelector('.page-loader');
const pageLoaderTop = document.querySelector('.page-loader-top');
const pageLoaderBottom = document.querySelector('.page-loader-bottom');
const logoLoader = document.querySelector('.uu-logo-loader');
const pageLoaderBar = document.querySelector('.page-loader-bar');
// Page Loader Event Listener
window.addEventListener('load', function() {
  // New GSAP Timeline
  const tl = new TimelineMax();
  // Timeline Animations
  tl.to(logoLoader, 0.5, {ease: Back.easeOut, top:'40vh'}, '+=.5')
  .to(logoLoader, 0.8, {ease: Power4.easeInOut, top:'100vh', opacity: 0}, '-=0.3')
  .to(pageLoaderBar, 0.8, {ease: Power4.easeIn, left:'0'}, '-=0.8')
  .to(pageLoaderBar, .1, {opacity:0})
  .to(pageLoaderTop, 0.8, {ease: Power4.easeInOut, top:'-50vh'}, '-=0.2')
  .to(pageLoaderBottom, 0.8, {ease: Power4.easeInOut, bottom:'-50vh', onComplete:removePageLoader}, '-=0.8')

});
// Remove Page Loader Once Complete
function removePageLoader() {
  pageLoader.remove();
}

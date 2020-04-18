$(function () { // wait for document ready
  
  var controller = new ScrollMagic.Controller();

  var horizontalSlide = new TimelineMax()
  // animate panels
  .to("#js-slideContainer", 1,   {x: "-17.6%"})	
  .to("#js-slideContainer", 1,   {x: "-33.1%"})
  .to("#js-slideContainer", 1,   {x: "-50.1%"})
  .to("#js-slideContainer", 1,   {x: "-83%"})
  
  


  // create scene to pin and link animation
  new ScrollMagic.Scene({
    triggerElement: "#js-wrapper",
    triggerHook: "onLeave",
    duration: "400%"
  })
    .setPin("#js-wrapper")
    .setTween(horizontalSlide)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);
  
  
  
});
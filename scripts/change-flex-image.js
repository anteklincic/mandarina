$('#carousel').flexslider({
  animation: "slide",
  controlNav: false,
  animationLoop: true,
  slideshow: false,
  itemWidth: 100,
  itemMargin: 5,
  asNavFor: '#slider',
  start: function(slider) {
    if (slider.pagingCount === 1) slider.addClass('flex-centered');
  }
});


$('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    sync: "#carousel",
    keyboard: true,                 
    multipleKeyboard: false
  });
  let slajder = $("#slider").data("flexslider");
  slajder.flexslider("stop");
  let carousel = $("#carousel").data("flexslider");
  
  function changeImg(el) {
  let filename = el.src.replace(/^.*[\\\/]/, '');
  imageNumber = filename.match(/\d+/)[0];
  slajder.flexAnimate(flexSliderPoints[imageNumber-1]); 
  }


function centerCarouselImages() {
  if (carousel.pagingCount === 1) {
    carousel.addClass('flex-centered');
  }
  else {
    carousel.removeClass('flex-centered');
  }

}

window.onresize = centerCarouselImages;
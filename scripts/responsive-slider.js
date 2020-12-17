function changeSliderImage(x) {
    const slider1 = document.getElementById("slide1");
    const slider2 = document.getElementById("slide2");
    const slider3 = document.getElementById("slide3");

    if (slider1 && slider2 && slider3) {
        if (x.matches) { // <1000px
            slide1.src = "bg1-mobile.jpg"
            slide2.src = "bg2-mobile.jpg"
            slide3.src = "bg3-mobile.jpg"
        } else {
            slide1.src = "bg1.jpg"
            slide2.src = "bg2.jpg"
            slide3.src = "bg3.jpg"
        }
    } else if (slider1 && slider2 && !slider3) {
        if (x.matches) { // <1000px
            slide1.src = "bg1-mobile.jpg"
            slide2.src = "bg2-mobile.jpg"
        } else {
            slide1.src = "bg1.jpg"
            slide2.src = "bg2.jpg"
        }
    }
    else {
        if (x.matches) { // <1000px
            slide1.src = "bg1-mobile.jpg"
        } else {
            slide1.src = "bg1.jpg"
        }
    }
}

var x = window.matchMedia("(max-width: 1000px)")
changeSliderImage(x)
x.addListener(changeSliderImage)
$('.icon').click(function(){
    $('span').toggleClass("cancel");
  });
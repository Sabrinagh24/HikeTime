
var slider = tns({
    container: '.slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    mouseDrag: true,
    autoplayButtonOutput: false,
    controls: false,
    navPosition : "bottom",
    nav: true,
    arrowKeys : true

  });
var slider = tns({
    container: '.slider2',
    items: 2,
    slideBy: 'page',
    autoplay: false,
    mouseDrag: false,
    autoplayButtonOutput: true,
    controls: true,
    nav: true,
    prevButton : ".previous",
    nextButton : ".next",
    navPosition : "bottom"
  });
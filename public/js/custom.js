var $hamburger = $(".hamburger");
var $nav       = $(".main-nav");

$hamburger.on( "click", function(e) {
    $hamburger.toggleClass("is-active");
    $nav.toggleClass("display-block");
});

$(document).ready(function(){

  $(".owl-carousel").owlCarousel({
    margin: 15,
    loop: true,
    items: 3,
    lazyLoad: true,
    autoplay: true,
    responsive: {
      0 : {
        items: 1,
        dots: false
      },
      480 : {
        items: 2
      },
      768 : {
        items: 3
      }
    },
  });

});

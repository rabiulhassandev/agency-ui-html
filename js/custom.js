$( window ).on( "load", function(){
  $("#loading").fadeOut(500);
});

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("fixed-top", "sticky_navbar")
  } else {
    navbar.classList.remove("fixed-top", "sticky_navbar");
  }
}

 // 12. WoW Js
new WOW().init();


// Service Slider

$('#service_slider').owlCarousel({
  loop: true,
  nav:true,
  dots:true,
  autoplayHoverPause:false,
  autoplay:true,
  autoplayTimeout: 4000,
  navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      },
  }
});

// Clients Review Slider




$('#client_review_slider').owlCarousel({
  loop: true,
  nav:true,
  dots:true,
  autoplayHoverPause:false,
  autoplay:true,
  autoplayTimeout: 4000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      },
  }
});

// Tech Filter

var $grid = $('.grid').isotope({
  itemSelector :'.grid-item',
  layOutMode : 'fitRows'
});

// Filter Items On Button Click 

$(".button-group").on("click","button",function(){
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({filter:filterValue});
});
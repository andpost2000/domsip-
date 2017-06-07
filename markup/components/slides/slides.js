$('.navigation').click(function() {
  $(this).toggleClass('navigation_show');
  $('.burger').toggleClass("active");
});
// slider function
$(document).ready(function() {
  $('#slider').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3500
  });
});


$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

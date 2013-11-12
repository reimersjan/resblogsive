//$(document).ready(function() {
//  $(window).scrollTop(
//    $('nav').offset().top
//  );
//});

$('.nav-trigger').click(function() {
  $('.main-nav').addClass('showit');
  $('.nav-close').addClass('showit');
});
$('.nav-close').click(function() {
  $('.main-nav').removeClass('showit');
  $('.nav-close').removeClass('showit');
});

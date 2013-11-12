//$(document).ready(function() {
//  $(window).scrollTop(
//    $('nav').offset().top
//  );
//});

jQuery('.nav-trigger').click(function() {
  $('.main-nav').addClass('showit');
  $('.nav-close').addClass('showit');
});
jQuery('.nav-close').click(function() {
  $('.main-nav').removeClass('showit');
  $('.nav-close').removeClass('showit');
});

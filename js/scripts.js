jQuery('.nav-trigger').click(function() {
  jQuery('.main-nav').addClass('showit');
  jQuery('.nav-close').addClass('showit');
});
jQuery('.nav-close').click(function() {
  jQuery('.main-nav').removeClass('showit');
  jQuery('.nav-close').removeClass('showit');
});

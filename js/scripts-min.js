jQuery(document).ready(function() {
  jQuery('.nav-trigger').click(function() {
    jQuery('.access').addClass('showit');
    jQuery('body').css('overflow', 'hidden');
    jQuery('.nav-close').addClass('showit');
    jQuery('.nav-trigger').addClass('hideit');
  });
  jQuery('.nav-close').click(function() {
    jQuery('.access').removeClass('showit');
    jQuery('.nav-close').removeClass('showit');
    jQuery('.nav-trigger').removeClass('hideit');
  });
});

// on ready
$(document).ready(function(){
    // push nav toggle
    $('#uu-pushmenu-trigger, #mobile-close-nav').click(function(e) {
      e.stopPropagation();
      $('.uu-main-nav').toggleClass('uu-main-nav-open');
      $('.page-container').toggleClass('uu-body-pushbody-left');
      $('#uu-pushmenu-trigger').toggleClass('is-active');
    });

    // push nav sub menu toggle
    $('.has-sub .sub-toggle').click(function(e) {
      e.stopPropagation();
      $(this).toggleClass('fa-angle-up fa-angle-down');
      $(this).toggleClass('is-active');
      $(this).closest('.has-sub').children('.sub-menu').slideToggle(300);
    });
});

// shrink nav on scroll
$(window).scroll(function(){
  var header = $('.uu-header'),
      scroll = $(window).scrollTop();

  if (scroll >= 68) header.addClass('shrink');
  else header.removeClass('shrink');
});

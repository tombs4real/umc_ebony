// on ready
$(document).ready(function(){
    // push nav toggle
    $('#uu-pushmenu-trigger, #mobile-close-nav').click(function(e) {
      e.stopPropagation();
      $('.uu-body').toggleClass('uu-body-pushbody-left');
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


    // sticky side nav
    var stickySideNavTop = $('.uu-side-nav').offset().top - 100;

  	function stickySideNav() {
  		var scrollTop = $(window).scrollTop();

  		if (scrollTop > stickySideNavTop) {
  			    $('.uu-side-nav').addClass('sticky');
  		} else {
  		    $('.uu-side-nav').removeClass('sticky');
  		}
  	};

  	$(window).scroll(function() {
  	    stickySideNav();
  	}).scroll();

    // side nav active toggle
    $('.uu-side-nav ul li a').click(function() {
      $('.uu-side-nav ul li a').removeClass('active');
      $(this).addClass('active');
    });
});

// shrink nav on scroll
$(window).scroll(function(){
  var header = $('.uu-header'),
      scroll = $(window).scrollTop();

  if (scroll >= 68) header.addClass('shrink');
  else header.removeClass('shrink');
});

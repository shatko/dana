export default {
  init() {
    // JavaScript to be fired on all pages

    // Scroll to top
    $('.footer-bottom__to-top').click(function() {
      $('html,body').animate({
        scrollTop: $('header').offset().top,
      }, '1000');
    });

    // Add Main Menu arrow
    $('#menu-main-menu > li').each(function() {
      if ($(this).hasClass('menu-item-has-children')) {
        $(this).append('<div class="sub-arrow"></div>');
      }
    });


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

export default {
  init() {
    // JavaScript to be fired on all pages

    // Scroll to top
    $('.footer-bottom__to-top').click(function() {
      $('html,body').animate({
        scrollTop: $('body').offset().top,
      }, '2000');
    });


    // Adds Main Menu arrow
    $('#menu-main-menu > li').each(function() {
      if ($(this).hasClass('menu-item-has-children')) {
        $(this).append('<div class="sub-arrow sub-arrow__main"></div>');
      }
    });


    // Adds Main Submenu arrow
    $('#menu-main-menu > li > ul > li').each(function() {
      if ($(this).hasClass('menu-item-has-children')) {
        $(this).append('<div class="sub-arrow sub-arrow__submenu"></div>');
      }
    });


    // Main Submenu first level
    $('.sub-arrow__main').click(function() {
      $('#menu-main-menu > li > .sub-menu').each(function() {
        $(this).removeClass('sub-first-active');
      });
      $(this).siblings('.sub-menu').addClass('sub-first-active');
    });


    // Main Submenu second level
    $('.sub-arrow__submenu').click(function() {
      $('#menu-main-menu > li > ul > li > ul').each(function() {
        $(this).removeClass('sub-second-active');
      });
      $(this).siblings('.sub-menu').addClass('sub-second-active');
    });


    // Starttermine Show All
    if ($('.starttermine__show-all-trigger')[0]) {
      $('.starttermine__show-all-trigger').click(function() {
        $(this).hide();

        $('#starttermine').children('.starttermine__card').each(function () {
          $(this).addClass('show-all');
        });
      });
    }


    // Events Show All
    if ($('.events__show-all-trigger')[0]) {
      $('.events__show-all-trigger').click(function() {
        $(this).hide();

        $('#events').children('.events__card').each(function () {
          $(this).addClass('show-all');
        });
      });
    }


    // Slider Absolventen
    $('.absolventen-slider__slider').slick({
      prevArrow: '<div class="slick-prev slick-arrow" aria-label="Prev"></div>',
      nextArrow: '<div class="slick-next slick-arrow" aria-label="Next"></div>',
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      adaptiveHeight: false,
      variableWidth: true,
      autoplay: false,
      autoplaySpeed: 3000,
      speed: 2000,
      dots: true,
      appendDots: $('.absolventen-slider__dots-wrapper'),
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

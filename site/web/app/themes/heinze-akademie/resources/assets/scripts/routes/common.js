export default {
  init() {
    // JavaScript to be fired on all pages

    // Burger Menu
    const burger = document.querySelector('.burger'),
          burgerWrapper = document.querySelector('.burger-wrapper'),
          mobileNav = document.querySelector('.mobile-nav');

    burger.addEventListener('click', () => {
      burgerWrapper.classList.toggle('burger_active');
      mobileNav.classList.toggle('mobile_nav_active');
    });


    // Scroll to top
    $('.footer-bottom__to-top').click(function() {
      $('html,body').animate({
        scrollTop: $('body').offset().top,
      }, '2000');
    });


    // Header Slider
    $('.header-ce__slider').slick({
      prevArrow: '<div class="header-ce__slider--arrow prev" aria-label="Prev"></div>',
      nextArrow: '<div class="header-ce__slider--arrow next" aria-label="Next"></div>',
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      // variableWidth: true,
      autoplay: false,
      autoplaySpeed: 3000,
      speed: 2000,
      dots: false,
      asNavFor: '.header-ce__slider-second',
    });

    $('.header-ce__slider-second').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      speed: 2000,
      dots: false,
      asNavFor: '.header-ce__slider',
      arrows: false,
      fade: true,
    });


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
      responsive: [
        {
          breakpoint: 500,
          settings: {
            adaptiveHeight: true,
            variableWidth: false,
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '20px',
          },
        },
      ],
    });


    // Slider Dozenten
    $('.dozenten-slider__slider').slick({
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
      appendDots: $('.dozenten-slider__dots-wrapper'),
      responsive: [
        {
          breakpoint: 500,
          settings: {
            adaptiveHeight: true,
            variableWidth: false,
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '20px',
          },
        },
      ],
    });


    // Questions
    $('.questions__trigger').click(function() {
      $(this).parent('.questions').toggleClass('questions-active');
    });

    var fixedQuestions = $('.questions');
    var fixedQuestionsWin = $(window);
    var fixedQuestionsWinHeight = fixedQuestionsWin.height();

    fixedQuestionsWin.on('scroll', function () {
      if ($(this).scrollTop() > fixedQuestionsWinHeight ) {
        fixedQuestions.addClass('questions-active');
        fixedQuestionsWin.off('scroll');
      }
    }).on('resize', function() {
       fixedQuestionsWinHeight = $(this).height();
    });


    // Adds Main Menu arrow
    $('#menu-main-menu > li').each(function() {
      if ($(this).hasClass('menu-item-has-children')) {
        $(this).children('.sub-menu').before('<div class="sub-arrow sub-arrow__main"></div>');
      }
    });


    // Adds Main Submenu arrow
    $('#menu-main-menu > li > ul > li').each(function() {
      if ($(this).hasClass('menu-item-has-children')) {
        $(this).children('.sub-menu').before('<div class="sub-arrow sub-arrow__submenu"></div>');
      }
    });

    // $('#menu-main-menu').before('<div class="close-desktop-menu"></div>');
    $('.nav > .menu-item-has-children > .sub-menu').mouseleave(function() {
      $('#menu-main-menu > li > .sub-menu').each(function() {
        $(this).removeClass('sub-first-active');
      });
    });

    // Main Submenu first level
    $('.sub-arrow__main').click(function() {
      $('#menu-main-menu > li > .sub-menu').each(function() {
        $(this).removeClass('sub-first-active');
      });
      $(this).siblings('.sub-menu').addClass('sub-first-active');
    });

    $('#menu-main-menu > .menu-item-has-children > a').hover(function() {
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


    $('#menu-main-menu > .menu-item-has-children > .sub-menu > .menu-item-has-children > a').hover(function() {
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


    // Team Member Info Click
    $('.team-member__icon--info').click(function() {
      $(this).parent().parent().find('.team-member__hover-text').toggleClass('open');
    });


    // Remove questions when footer appears
    var questions = $('.questions');

    $(document).on('scroll', function() {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();

      if (((scrollHeight - scrollPosition) / scrollHeight) * 100 < 10) {
        questions.addClass('remove');
      } else {
        questions.removeClass('remove');
      }
    });


    // List teasers title same height magic
     if ($('.list-teasers')[0] && window.matchMedia('(min-width: 1200px)').matches) {
       var highest = 0;
       $('.list-teasers').each(function() {
         $(this).children('.container').find('.list-teasers__single-container').each(function() {
           var currentHeight = $(this).children('.list-teasers__single').children('.list-teasers__title').height();

           if (highest < currentHeight) {
             highest = currentHeight;
           }
         });

         $(this).children('.container').find('.list-teasers__single-container').each(function() {
            $(this).children('.list-teasers__single').children('.list-teasers__title').css('min-height', highest);
         });
       });
     }


    // Youtube pause
    $('#header-video').on('hide.bs.modal', function () {
      $('.video-if').each(function(){
        this.contentWindow.postMessage('{"event":"command", "func":"stopVideo", "args":""}', '*')
      });
    })


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

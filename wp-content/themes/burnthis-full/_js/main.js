$(function() {
  console.log('main');

  /* GENERAL */
  // For organization's sake, Try to write all the functions in a big theme-titled object. Then at the bottom, call all the functions by page they're needed on. See the Analytics theme main.js for example:

  var burnthis = {
    login : function() {
      console.log('login success');
    },

    modalOpen : function(elem, modalBG) {
      // MENU MODAL HANDLER
      // console.log('clicked');
      $(elem).on('click', function(e) {
        // console.log('click open');
        e.preventDefault();
        $(modalBG).css("display", "flex").hide().fadeIn(200);
        // $('.main-content, .footer').fadeTo(200, 0);
      });
    },

    closeNavModal : function() {
      // CLOSE MODAL TRIGGER
      const btn = '.menu-modal-close',
        modal = '.nav-menu-bg',
        modalContent = $(modal).find('.modal-menu, .modal-box');

      // close modals if click bg or x-button
      $(modal).on('click', function(e) {
        var clicked = $(e.target);

        if (clicked.is($(btn)) || clicked.parents().is($(btn))) {
          $(modal).fadeOut(100).promise().done(function() {
            $(this).removeAttr("style");
            // $('.main-content, .nav-bar, .footer').fadeTo(100, 1);
          });
          return;

        } else if (clicked.is($(modalContent)) || clicked.parents().is($(modalContent))) {
          return;

        } else {
          $(modal).fadeOut(200).promise().done(function() {
            $(this).removeAttr("style");
            $('.main-content, .footer').fadeIn(200);
            // $('.main-content, .footer').fadeTo(200, 1);
          });
        }
      });
    }
}

burnthis.modalOpen('.menu-button', '.nav-menu-bg');
burnthis.closeNavModal();


$(document).ready(function() {
  var swiper = new Swiper('#news-swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {

      1180: {
        slidesPerView: 3
      },
      // when window width is <= 1020px
      1020: {
        slidesPerView: 2
      },
      // when window width is <= 640px
      640: {
        slidesPerView: 1
      }
    }
  });
});
  // HOME PAGE FUNCTIONS
  if ($('body.home').length) {
    burnthis.login();
  }


}); // end load jquery

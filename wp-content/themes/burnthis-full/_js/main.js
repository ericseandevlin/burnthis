$(function() {
  // console.log('main');

  /* GENERAL */
  // For organization's sake, Try to write all the functions in a big theme-titled object. Then at the bottom, call all the functions by page they're needed on. See the Analytics theme main.js for example:

var burnthis = {

openModal : function() {
  $('.menu-button').on('click', function() {
    $('.nav-menu-bg').css("display", "flex").hide().fadeIn(200);
  });
},

closeModal : function() {
  function closeNavModal() {
    const btn = '.main-modal-close',
      modal = '.nav-menu-bg',
      modalContent = $(modal).find('.nav-menu');

    // close modals if click bg
    $(modal).on('click', function(e) {
      var clicked = $(e.target),
          windowWidth = $(window).width();
      console.log('modal close clicked');
      console.log(windowWidth);
      console.log(clicked);

      if ( clicked.is($(btn)) || clicked.parents().is($(btn)) ) {
        $(modal).fadeOut(200, function() {
          $(this).removeAttr("style");
        });

      } else if ( clicked.is($('.nav-link-text')) ) {
        if (windowWidth < 991) {
          $(modal).fadeOut(200, function() {
            $(this).removeAttr("style");
        });
       };


      } else if (clicked.is($(modalContent)) || clicked.parents().is($(modalContent))) {
        return;

      } else {
        $(modal).fadeOut(200, function() {
          $(this).removeAttr("style");
      });
     };
    });
  };
},


news : function() {
$(document).ready(function() {
  var swiper = new Swiper('#news-swiper', {
    slidesPerView: 2,
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
        slidesPerView: 2
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
},

faq : function() {
  // Initialize FAQ accordion
  $(function() {
    $("#faq-accordion").accordion({
      heightStyle: "content",
      collapsible: true,
      active: false,
      icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" }
    });

    $('.question').click(function(e) {
      $('.bullet-circle').removeClass('open');
      $(this).find($('.bullet-circle')).addClass('open');
    });
  });
 }

}// END BURN THIS FUNCTIONS object

  // HOME PAGE FUNCTIONS
  if ($('body.home').length) {
    burnthis.openModal();
    burnthis.closeModal();
    burnthis.news();
    burnthis.faq();
  }


}); // end load jquery

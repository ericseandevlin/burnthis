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

burnthis.modalOpen('.menu-button-2', '.nav-menu-bg');
burnthis.closeNavModal();


  // HOME PAGE FUNCTIONS
  if ($('body.home').length) {
    burnthis.login();
  }


}); // end load jquery

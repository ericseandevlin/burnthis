$(function() {
  console.log('main');

  /* GENERAL */
  // For organization's sake, Try to write all the functions in a big theme-titled object. Then at the bottom, call all the functions by page they're needed on. See the Analytics theme main.js for example:

  var themename = {
    login : function() {
      console.log('login success');
    }
  }

  // HOME PAGE FUNCTIONS
  if ($('body.home').length) {
    themename.login();
  }


}); // end load jquery

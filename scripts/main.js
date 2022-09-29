$(document).ready(function(){

    $('.navbar').hide();
  
    $(function () {
      $(window).scroll(function () {
  
        if ($(this).scrollTop() > 934.9) {
          $('.navbar').fadeIn();
          
        } else {
          $('.navbar').fadeOut();
          
        }
      });
    });
});

jQuery(document).ready( function ($) {
   $('#contact-info-popup').on('click', function () {
      $('.contact-popup-wprapper').fadeToggle();
   });
   $('.pupup-close').on('click', function () {
       $('.contact-popup-wprapper').fadeOut();
   });
});
jQuery(document).ready(function($) {
  $('.ssta-content').addClass('ssta-content--hide').hide();
  
  $('.ssta-title').on('click', function(){
    var el = $(this);
    var check = el.contents();
    var aniSpeed = 200;

    if (el.siblings('.ssta-content').hasClass('ssta-content--active')) {
      $('.ssta-content.ssta-content--active')
        .removeClass('ssta-content--active')
          .slideUp(aniSpeed);
      $('.ssta-title--active').removeClass('ssta-title--active');
    } else {

    // Hide Previous Content
      $('.ssta-content.ssta-content--active')
        .removeClass('ssta-active')
          .slideUp(aniSpeed);
      $('.ssta-title--active').removeClass('ssta-title--active');

    // Show clicked Content
      el.siblings('.ssta-content')
        .addClass('ssta-content--active')
          .slideDown(aniSpeed);

      el.addClass('ssta-title--active');
    }
  });

  // console.log('Simple Starter Accordion loaded');
});
;((w, $) => {
  'use strict';

  const stepsBooking = () => {
    $('.steps-booking-block').each(function() {
      const $block = $(this);
      $block.on('click', '.steps-booking__item .__btn-no', function(e) {
        e.preventDefault();
        $(this).siblings().css('display', 'none');
        $block
          .find('.steps-booking__item.__item-index-2, .steps-booking__item.__item-index-3')
          .removeClass('step-hidden')
      })

      $block.on('click', '.steps-booking__item .__btn-yes', function(e) {
        e.preventDefault();
        $(this).siblings().css('display', 'none');
        $block
          .find('.steps-booking__item.__item-index-4')
          .removeClass('step-hidden')
      })
    })
  }

  $(stepsBooking)
})(window, jQuery)
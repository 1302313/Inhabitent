(function($) {
  $(function() {
    const $searchForm = $('.search-form');
    let $text = $('.search-field');

    // on click
    $('.search-submit').click(function() {
      if ($text.val().length === 0) {
        event.preventDefault();
      }
      $searchForm.toggleClass('.search-field-focus');
      $text.focus();
    });

    // on blur
    $text.blur(function() {
      if ($text.val().length > 0) {
        return false;
      }
      $searchForm.removeClass('.search-field-focus');
    });
  });
})(jQuery);

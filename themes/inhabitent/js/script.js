(function($) {
  $(function() {
    const $searchTextInput = $('#masthead input[type="search"]');
    const $searchButton = $('.search-submit');
    const $label = $searchButton.siblings('label');

    $searchButton.click(function(event) {
      event.preventDefault();
      $('#masthead .search-field').toggle('slide');
      $searchTextInput.focus();
    });

    $searchTextInput.blur(function() {
      if ($(this).val() == '') {
        $('#masthead .search-field').toggle('slide');
      }
    });
    // When leaving focus or clicking away, hide the label
    // $searchField.on('blur', function() {
    //   '' === $searchField.val() &&
    //     $('#masthead label').animate({
    //       width: '0'
    //     });
    // });
  });
})(jQuery);

// header reverse header

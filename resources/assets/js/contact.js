(function($) {
  $(function() {
    $('#contact').on('shown.bs.modal', function() {
      $('#name').focus();
    });
  });
})(jQuery);

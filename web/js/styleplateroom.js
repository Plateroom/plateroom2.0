 $(document).ready(function () {
  $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true
  });

  $('.modal-trigger').click(function (e) {
      e.preventDefault();

      var targetUrl = $(this).attr('href');

      $.ajax({
        url: targetUrl
      }).done(function (data) {
        $('#modal-item').html(data);
        $('#modal-item').openModal();
      });
  });
});
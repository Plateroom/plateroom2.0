/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


// paese che vai... che trovi

$(function() {
  function spinner($element) {
    var words = [];

    var list = $('li', $element);
    list.each(function() {
      words.push($(this).text());    
    });
    list.remove();

    var $ss = $('#spinner-show');

    var i = 0, i_next = 1;

    $('.next em', $ss).text(words[i_next]);
    $ss.width($('.current').width());

    setInterval(function() {
      $ss.addClass('swap');
      i = i_next;
      i_next++;
      if(i_next >= words.length) i_next = 0;
      $ss.width($('.next em').width());
      setTimeout(function() {
        $('.next em', $ss).text(words[i_next]);
        $('.current', $ss).text(words[i]);
        $ss.removeClass('swap');
      console.log('swap!');
      }, 600);
    }, 3800);
  }

  if($('#spinner').length) {
    spinner($('#spinner'));
  }
});

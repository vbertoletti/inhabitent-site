jQuery(document).ready(function($) {


  $('.search-section-nav').on('click', function(event) {
    
    // The default action that belongs to the event will not occur. Clicking on the submit button, prevents it from re-directing to the search page.
    event.preventDefault();

    var $searchField = $('.search-field');

    //When clicking the icon, focus will be on the input field isntead of icon
    $searchField.addClass('search-active').focus();

    //When it loses focus by clicking somewhere else, hides the input field
    $searchField.on('blur', function() {
      $searchField.removeClass('search-active');
    });
  });



  // Found below example to change nav menu color once user scrolls below the hero banner.
  // http://lukedowding.com/change-nav-bar-menu-add-css-class-scroll/

  $(function() {
    var header = $('#site-navigation');

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 700) {
        header.addClass('scrolled');
      } else {
        header.removeClass('scrolled');
      }
    });
  });


});

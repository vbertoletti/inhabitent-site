jQuery(document).ready(function($) {

  $('.search-section-nav').on('click', function(event) {

    // The default action that belongs to the event will not occur. Clicking on the submit button, prevents it from re-directing to the search page.
    event.preventDefault();

    //Toggles the serach input field
    $('.search-field').addClass('search-active');
    // you can also try toggleClass or addClass and removeClass

    //When clicking the icon, focus will be on the input field isntead of icon
    $('.search-field').focus();

    //When it loses focus by clicking somewhere else, hides the input field
    $('.search-field').on('blur', function(){
        $('.search-field').toggleClass('search-active');
    });

  });
});

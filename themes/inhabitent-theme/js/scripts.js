jQuery(document).ready(function($) {

  $('.search-section-nav .search-submit').on('click', function(event) {

    // The default action that belongs to the event will not occur. Clicking on the submit button, prevents it from re-directing to the search page.
    event.preventDefault();

    //Toggles the serach input field
    $('.search-section-nav .search-field').toggle();

    //when clicking the icon, focus will be on the input field isntead of icon
    $('.search-section-nav .search-field').focus();

    //when it loses focus by clicking somewhere else, hides the input field
    $('.search-section-nav .search-field').on('blur', function(){
        $('.search-section-nav .search-field').hide();
    });

    //submits seach once enter key is pressed - answer from stackoverflow, link: https://stackoverflow.com/questions/979662/how-to-detect-pressing-enter-on-keyboard-using-jquery
    $(document).keydown(function( event ) {
        if ( event.which == 13 ) {
            $('.search-section-nav .search-form').submit();
        }
    });
  });
});

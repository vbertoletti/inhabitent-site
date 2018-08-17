jQuery(document).ready(function( $ ) {

  // $( ".fa-search" ).click(function() {
  //   $( "input" ).toggle().animate({
  //     width: "+=20",
      
  //   }, 1000);
  // });

 $( ".fa-search" ).click(function() {
    $( ".input-field" ).blur().animate({
      width: "+=20",
      
    }, 1000);
  });


});
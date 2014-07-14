jQuery(window).bind('orientationchange', function(e) {

  switch ( window.orientation ) {

    case 0:
        alert('portrait mode');
    break;

    case 90:
        alert('landscape mode screen turned to the left');
    break;

    case -90:
        alert('landscape mode screen turned to the right');
    break;

  }

});
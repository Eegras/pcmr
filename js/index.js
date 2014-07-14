jQuery(window).bind('orientationchange', function(e) {

  switch ( window.orientation ) {

    case 0 || 180:
        $(".cycle").css("opacity", 0);
    break;

    case 90 || -90:
        $(".cycle").css("opacity", 1);
    break;

  }

});
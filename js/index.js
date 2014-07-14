jQuery(window).bind('orientationchange', function(e) {

  switch ( window.orientation ) {

    case 0:
        $(".cycleimg").css("opacity", 0);
    break;

    case 90:
        $(".cycleimg").css("opacity", 1);
    break;

    case -90:
        $(".cycleimg").css("opacity", 1);
    break;

  }

});
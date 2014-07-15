$(".link").hover(function() {
    $(".label").text($(this).attr("data-type"));
    $(".label").css("opacity", "1");
}, function() {
    $(".label").css("opacity", "0");
});

if (window.orientation == 0 || window.orientation == 180) {
    $(".cycle").css("opacity", 0);
}

jQuery(window).bind('orientationchange', function(e) {

  switch ( window.orientation ) {

    case 0:
        $(".cycle").css("opacity", 0);
    break;

    case 180:
        $(".cycle").css("opacity", 0);
    break;

    case 90:
        $(".cycle").css("opacity", 1);
    break;

    case -90:
        $(".cycle").css("opacity", 1);
    break;

  }

});
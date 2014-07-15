$(".link").hover(function () {
    $(".label").text($(this).attr("data-type"));
    $(".label").css("opacity", "1");
}, function () {
    $(".label").text("");
    $(".label").css("opacity", "0");
});

if (window.orientation != undefined) {
    $(".redshow").css("display", "none");
    $(".fsholder").css("display", "none");
}

if (window.orientation == 0 || window.orientation == 180) {
    $(".sidebar").css("opacity", 0);
}

$(window).bind('orientationchange', function (e) {

    switch (window.orientation) {

    case 0:
        $(".sidebar").css("opacity", 0);
        break;

    case 180:
        $(".sidebar").css("opacity", 0);
        break;

    case 90:
        $(".sidebar").css("opacity", 1);
        break;

    case -90:
        $(".sidebar").css("opacity", 1);
        break;

    }

});

var fs = true;

function toggleSS () {
    if (fs) {
        $(".redshow").css("width", "100%");
        $(".fsholder").css("width", "100%");
        fs = false;
    } else {
        $(".redshow").css("width", "27%");
        $(".fsholder").css("width", "27%");
        fs = true;
    }
};
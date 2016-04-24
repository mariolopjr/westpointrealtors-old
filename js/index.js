/* Index JavaScript functions
 *
 * Author: Mario Lopez
 *
 */

var request;

$(document).ready(function() {
    var toTopBtn = $(".toSiteTop");
    var minScrolledPixelsForToTopBtn = 200;

    // Listen to scroll event
    $(window).scroll($.debounce(function () {

        var currentScrolledPixels = $(this).scrollTop();

        if (currentScrolledPixels > minScrolledPixelsForToTopBtn) {
            toTopBtn.removeClass("hidden");
        }
        else {
            toTopBtn.addClass("hidden");
        }
    }, 100));
});

/* Index JavaScript functions
 *
 * Author: Mario Lopez
 *
 */

var request;

$(document).ready(function() {
    var navBar = $(".siteHeader");
    var navBarScrolledPixels = 50;

    // Listen to scroll event
    $(window).scroll($.debounce(function () {

        var currentScrolledPixels = $(this).scrollTop();
        console.log($(this).scrollTop());

        if (currentScrolledPixels > navBarScrolledPixels) {
            navBar.addClass("siteHeaderScrolled");
        }
        else {
            navBar.removeClass("siteHeaderScrolled");
        }
    }, 300));
});

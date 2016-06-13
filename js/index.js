/* Index JavaScript functions
 *
 * Author: Mario Lopez
 *
 */

var request;

function loadIMG(id, e) {
    $("#" + id).attr('src', $(e).attr('src'));
    $(e).siblings().removeClass("active");
    $(e).addClass("active");
}

$(document).ready(function() {

    /*var input = document.getElementById('addressInput');
    var options = {
        types: ['(cities)'],
        componentRestrictions: {
            country: 'us'
      }
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);*/

    var toTopPageOffset = 220;
    var toTopTimeDuration = 500;

    /* Display to-top after certain offset
    $(window).scroll(function() {

        if ($(this).scrollTop() > offset) {
            $('.to-top').fadeIn(toTopTimeDuration);
        } else {
            $('.to-top').fadeOut(toTopTimeDuration);
        }

    });*/

    $('.to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, toTopTimeDuration);
        return false;
    });
});

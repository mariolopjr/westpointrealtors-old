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
});

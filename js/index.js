/* Index JavaScript functions
 *
 * Author: Mario Lopez
 *
 */

var request;

function loadIMG(e, img) {
    $(e).attr('data-src', img);
}

$(document).ready(function() {

    var input = document.getElementById('searchField');
    var options = {
        types: ['(cities)'],
        componentRestrictions: {
            country: 'us'
      }
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);
});

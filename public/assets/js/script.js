/**
 * search ajax
 * this script uses handlebar
 * @param url
 */
function search(url) {
    jQuery('#properties').html('');
    property_tpl = Handlebars.compile(jQuery('#property_tpl').html());
    jQuery('#quick-loader').show();
    // Request the data
    jQuery.ajax({
        url: url,
        data: {},
        success: function(response) {
            var arrayLength = response.data.length;
            if (!arrayLength) {
                jQuery('#properties').html('<tr><td colspan="6"><p class="alert alert-danger">No property found.</p></td></tr>');
            }
            for (var i = 0; i < arrayLength; i++) {
                jQuery('#properties').append(property_tpl(response.data[i]));
            }
            jQuery('#quick-loader').hide();
        }

    });
}

jQuery(document).ready(function(){
    search('v1/api/properties');

});
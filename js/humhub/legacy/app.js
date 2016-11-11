
/**
 * @deprecated since v1.2
 */
function setModalLoader() {
    $(".modal-footer .btn").hide();
    $(".modal-footer .loader").removeClass("hidden");
}

/**
 * USED in  fileuploader.js
 */
function htmlEncode(value) {
    //create a in-memory div, set it's inner text(which jQuery automatically encodes)
    //then grab the encoded contents back out.  The div never exists on the page.
    return $('<div/>').text(value).html();
}

/**
 * Used in spacepicker.js
 */
function htmlDecode(value) {
    return $('<div/>').html(value).text();
}









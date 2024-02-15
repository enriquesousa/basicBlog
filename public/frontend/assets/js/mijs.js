/* JS para pop youtube video
* Lo saque de: https://www.solodev.com/blog/web-design/how-to-add-pop-up-video-into-a-website.stml
*/

$(document).ready(function () {
    $('#headerVideoLink').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
});
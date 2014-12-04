$("#myModal").click(function() {
    $("#topSec").load("img/prints/014.JPG");
});

function modalLoad(imageName) {
    docURL = "http://codeinart.com/" + imageName; //TESTING!!!!! TEMPOARAY
    $('.fb-comments').attr('data-href', docURL)
    $('#expandedImg').attr('src', imageName);
    $('#myModal').modal('show');

    /*Update Facebook widget*/
    updateFBComp(document, 'script', 'facebook-jssdk');
}

/* Facebook Widget */
function updateFBComp(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}

/*
 * Original Code from: Stackoverflow
 * Reference: http://stackoverflow.com/questions/22259099/how-to-change-width-on-facebook-comment-widget
 * Description: Update facebook widget size to 100% width
 *
function fbCommentsWorkaround() {
    function resizeFacebookComments() {
        var src = $('.fb-comments iframe').attr('src').split('width='),
                width = $('.fb-comments').parent().parent().width();
        $('.fb-comments iframe').attr('src', src[0] + 'width=' + width);
        $('.fb-comments iframe').css({width: width});
        $('.fb-comments span').css({width: width});
    }

    FB.Event.subscribe('xfbml.render', resizeFacebookComments);

    $(window).on('resize', function() {
        resizeFacebookComments();
    });

    $('.fb-comments iframe').on('load', function() {
        resizeFacebookComments();
        $('.fb-comments iframe').unbind('load');
    });
}

window.fbAsyncInit = function() {
    FB.init({
        appId: "596895303735715",
        status: true,
        cookie: true,
        oauth: true,
        xfbml: true,
        logging: false
    });
    fbCommentsWorkaround();
};

(function(d) {
    var js, id = 'facebook-jssdk';
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
}(document));
*/
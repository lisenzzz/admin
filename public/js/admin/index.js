function adminIndex($) {
    var height=$(document).height()-61;
    var width=$(document).width()-201;
    $('#main-image').attr('src','/images/0024.jpg').css({
        'height':height+'px',
        'width':width+'px'
    });
}
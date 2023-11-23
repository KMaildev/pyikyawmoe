$('a[href^="#"]').click(function () {
    var speed = 200; // 繝溘Μ遘偵〒險倩ｿｰ
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({
        scrollTop: position
    }, speed, 'swing');
    return false;
});

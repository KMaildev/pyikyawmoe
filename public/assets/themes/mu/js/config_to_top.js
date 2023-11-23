// 繝壹�繧ｸ縺ｮ蜈磯�ｭ縺ｸ謌ｻ繧九�繧ｿ繝ｳ
$(function () {
    // 繝懊ち繝ｳ縺ｮ蜃ｺ縺怜�繧�
    $(window).scroll(function () {
        // 繝壹�繧ｸ縺ｮ繝医ャ繝励°繧峨�繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ菴咲ｽｮ繧貞叙蠕�
        var pos = $(window).scrollTop();
        // 繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ菴咲ｽｮ縺ｮ遐斐＆
        if (400 < pos) {
            // 繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ縺�200繧定ｶ�∴縺溘ｉ陦ｨ遉ｺ
            $('#to-top').fadeIn('fast');
        } else {
            // 縺昴ｌ莉･螟悶□縺｣縺溘ｉ髱櫁｡ｨ遉ｺ
            $('#to-top').fadeOut('fast');
        }
    });
    // 蜈磯�ｭ縺ｸ謌ｻ繧句虚縺�
    $('#to-top a.page_top').click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 'fast');
    });
});

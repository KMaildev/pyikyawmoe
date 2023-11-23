$(function () {
    if ($(window).width() > 767) { // 繧ｦ繧､繝ｳ繝峨え繧ｵ繧､繧ｺ縺ｮ蟷�′767繝斐け繧ｻ繝ｫ繧医ｊ繧ょ､ｧ縺阪＞蝣ｴ蜷�
        $(".sp-slide a").each(function () {
            $(this).addClass("sp-selectable").css("cursor", "pointer");
        });
    }
});

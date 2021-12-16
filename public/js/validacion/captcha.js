
$(document).ready(function() {
    //Auto complete off
    $("g-recaptcha").attr("autocomplete", "off");
    //Refresh captcha image
    $("g-recaptcha").click(function() {
        var rnd = new Date().getTime();
        var src = $("img.captcha-img").attr("src");
        if (src.indexOf("?") != -1) {
            var ind = src.indexOf("?");
            src = src.substr(0, ind);
        }
        src += "?" + rnd;
        $("img.captcha-img").attr("src", src);
        $("#verify").val("");
    });
});


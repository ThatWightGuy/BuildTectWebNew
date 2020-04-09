$(document).ready(function(){
    var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
	var cursor = $(".cursor");

    if(!iOS){
        $(window).mousemove(function(e) {
            cursor.css({
                top: e.clientY - cursor.height() / 2,
                left: e.clientX - cursor.width() / 2
            });
        });

        $(window)
            .mouseleave(function() {
                cursor.css({
                    opacity: "0"
                });
            })
            .mouseenter(function() {
                cursor.css({
                    opacity: "1"
                });
            });

        $("a")
            .mouseenter(function() {
                cursor.css({
                    transform: "scale(.5)"
                });
            })
            .mouseleave(function() {
                cursor.css({
                    transform: "scale(1)"
                });
            });

        $("button")
            .mouseenter(function() {
                cursor.css({
                    transform: "scale(.5)"
                });
            })
            .mouseleave(function() {
                cursor.css({
                    transform: "scale(1)"
                });
            });

        $(window)
            .mousedown(function() {
                cursor.css({
                    transform: "scale(.2)"
                });
            })
            .mouseup(function() {
                cursor.css({
                    transform: "scale(1)"
                });
            });
    }
});

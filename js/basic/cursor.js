$(document).ready(function(){
    var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
	var cursor = $(".cursor");
    var cursor_main = $(".cursor-main");
    var cursor_follower = $(".cursor-follower");

    function changeCursorColor(elem){
        var navcolor = $(elem).attr("navcolor");
        var cursor = $(elem).attr("cursor");
        var color;

        if(cursor != undefined){
            color = cursor;
        }

        if(navcolor != undefined){
            color = navcolor;
        }

        if(color != undefined){
            if(color == "blue" || color == "darkblue"){
                cursor_main.removeClass("cursor-main-blue");
                cursor_follower.removeClass("cursor-follower-blue");
                cursor_main.addClass("cursor-main-white");
                cursor_follower.addClass("cursor-follower-white");
                console.log("here");
            }
            else if(color == "white" || color == "transparent"){
                cursor_main.removeClass("cursor-main-white");
                cursor_follower.removeClass("cursor-follower-white");
                cursor_main.addClass("cursor-main-blue");
                cursor_follower.addClass("cursor-follower-blue");
            }
        }
    }

    if(!iOS){
        $(window).mousemove(function(e) {
            cursor_main.css({
                top: e.clientY - cursor_main.height() / 2,
                left: e.clientX - cursor_main.width() / 2
            });
            cursor_follower.css({
                top: e.clientY - 20,
                left: e.clientX - 20
            });
        });

        $(window)
            .mousedown(function(){
                cursor_follower.css({
                    transform: "scale(.5)"
                });
            })
            .mouseup(function(){
                cursor_follower.css({
                    transform: "scale(1)"
                });
            });

        $(window)
            .mouseleave(function() {
                cursor_main.css({
                    opacity: "0"
                });
                cursor_follower.css({
                    opacity: "0"
                });
            })
            .mouseenter(function() {
                cursor_main.css({
                    opacity: "1"
                });
                cursor_follower.css({
                    opacity: "1"
                });
            });

        /*$("div, button, a")
            .mouseenter(function(){
                changeCursorColor($(this));
            });*/

        $("button, a, .navi-main-item, .slick-arrow")
            .mouseenter(function(){
                cursor_follower.css({
                    transform: "scale(1.5)"
                });
            })
            .mouseleave(function(){
                cursor_follower.css({
                    transform: "scale(1)"
                });
            });
    }
});

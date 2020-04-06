$(document).ready(function(){
	var cursor = $(".cursor");

	function getColor(div){
		var current = div;
		var div_color = div.css("background-color");

		/*while(div_color == "rgba(0, 0, 0, 0)"){
			current = current.parent();
			div_color = current.css("background-color");
		}*/

		return div_color;
	}

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
                transform: "scale(2)"
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
});

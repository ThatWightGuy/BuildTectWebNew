$(document).ready(function(){
	$("#help-checkbox").prop('checked', false);

	$("#help-checkbox").click(function(){
        if($(this).is(":checked")){
        	$("#help-mode-status").text("On");
        }

        else if($(this).is(":not(:checked)")){
        	$("#help-mode-status").text("Off");
        }
    });
});
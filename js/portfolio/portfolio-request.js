$(document).ready(function(){
    var time; 

	function formSubmit(){
		var form_data = $("#portfolioForm").serializeArray();
    	
    	$.ajax({
    		url: baseURL + "index.php/Portfolio/searchForm",
    		method: "post",
    		data: form_data,
    		dataType: "json",
    		success: function(response){
    			//console.log($("#portfolio-form").serialize());
    			//$(".portfolio-items-cont").empty();
    			$(".portfolio-items-cont").html(response["PortfolioView"]);
                layoutResize();
                lightbox_open();
    		}
    	});
	}

    $("#portfolioForm").submit(function(e){
        e.preventDefault();
    });
    
    $("#portfolio-search-bar").keyup(function(){
        clearTimeout(time);
        time = setTimeout(formSubmit, 200);
    });

    $(".sidebar-drop-switch-input").click(function(){
		formSubmit();
    });
});
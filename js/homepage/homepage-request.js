$(document).ready(function(){
	function portfolioRequest(button_data){
		var post_data = 
		[
			{"name": "JobType", "value": button_data}
		];

		$.post({
			url: baseURL + "index.php/Homepage/portfolioRedirect",
    		method: "post",
    		data: post_data,
    		dataType: "json"
		});
	}

	/*$(".learn-more-port-col-button").click(function(){
		portfolioRequest($(this).val());
	});*/
});
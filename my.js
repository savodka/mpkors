$('[class="subscribe"]').click(function(){
	$.post(
		"send.php",
		{
			email: $('[name="email"]').val(),
		},
		function( data ){
			$( ".result" ).html(data);
		}
	);
});
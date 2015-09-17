$('input[type="image"]').error(function(){
	var text = $(this).attr('alt') || 'Missing Alt';
	$(this).attr('type', 'submit').val( text );
});
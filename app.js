//submit  profile form data
$(document).ready(function() {
    
	$('form').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'profile.php',
			data: $('form').serialize(),
			success: function () {
				alert('Form submission was successful.');
			}
		});
	});
});

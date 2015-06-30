$(document).ready(function() {	
	
	//reset profile_form if it is the profile.php page that is  being loaded  (ie, when the browser back button is clicked)
	$_path = $(location).attr('pathname');
	if($_path == '/jens_site/profile.php') {
		$('#profile_form').get(0).reset(); 
	}

});


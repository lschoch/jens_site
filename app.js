$(document).ready(function() {
	$_path = $(location).attr('pathname');	
	
	//reset profile_form if it is the profile.php page that is  being loaded  (ie, when the browser back button is clicked)	
	if($_path == '/jens_site/profile.php') {
		$('#profile_form').get(0).reset(); 
		$('#student_id').focus();
	}

	//load data from profiles.json file corresponding to student_id
	$('#student_id').change(function() {
		$.getJSON( 'students.json', function( data ) {
			var stud_id = $('#student_id').val();
			var flag = true;
			$.each(data, function(index, value) {
				if(value.student_id  == stud_id) {
			   		$('#first').val(value.first);
			   		$('#last').val(value.last);
			   		$('#homtel').val(value.homtel);
			   		flag = false;
			   		return(false);
			   	}
		   	} );
		   	if(flag == true) {
		   		alert("Sorry, I don\'t have that id in my list.");
		   		$('#student_id').val('');
		   		$('#student_id').focus();
		   	}			 
		});
	});	
});

/*
function getFormValues(element) {
    var form = element.form;
    var controls = form.controls;

    for (var i=0, iLen=controls.length; i<iLen; i++) {
        alert(controls[i].name + ': ' + controls[i].value);
    }
    // Prevent form submission
    return false;
}

$.each( data, function(index, value ) {
			 	if(value.student_id  == stud_id) {
			   		$('#profile_form input[type=text').each(function(){
			   			$(this.value())
			   		});
			   	}
			 });


$.each([ 52, 97 ], function( index, value ) {
  alert( index + ": " + value );
});			 
*/
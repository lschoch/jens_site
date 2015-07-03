$(document).ready(function() {
	$_path = $(location).attr('pathname');	
	
	//reset profile_form if it is the profile.php page that is  being loaded  (ie, when the browser back button is clicked)	
	if($_path == '/jens_site/profile.php') {
		$('#profile_form').get(0).reset(); 
		//disable all buttons except  student_id,  renable after student_id has been entered and the form populated with archived data, if any
		$('input, select, button, submit').each(function(){
   			var $input = $(this);			   			
   			$input.attr('disabled', 'disabled');
		});

		$('#student_id').removeAttr('disabled');
		$('#student_id').focus();
	}

	//load data from students.json file corresponding to student_id
	$('#student_id').change(function() {
		$.getJSON( 'students.json', function( data ) {
			var stud_id = $('#student_id').val(); // the value entered in the student_id input
			var found = false;
			$.each(data, function(index, value) {
				if(value.student_id  == stud_id) {
					
					$('#first').val(value.first);
			   		$('#last').val(value.last); 
			   		$('#homtel').val(value.homtel);
			   		$('#mobtel').val(value.mobtel);
			   		$('#email').val(value.email);
			   		$('#per1').val(value.per1);
			   		$('#per2').val(value.per2);
			   		$('#per3').val(value.per3);
			   		$('#per4').val(value.per4);
			   		$('#per5').val(value.per5);
			   		$('#per6').val(value.per6);
			   		$('#per7').val(value.per7);

			   		found =true; // id found in students.json, a valid id was entered
			   		return(false);
			   	}
		   	} );
		   	if(!found) {
		   		alert("Sorry, that is not a valid Student ID. \nPlease recheck your Student ID and try again.");
		   		$('#student_id').val('');
		   		$('#student_id').focus(); // start over with valid id
		   	}	 
		});
		
		// reenable buttons, inputs, selects after input of valid id and populating form data from students.json file
		$('input, select, button, submit').each(function(){
				var $input = $(this);			   			
				$input.removeAttr('disabled');
		});
	});
	
	//prevent submit on input keypresses 
	$('input, selector, button').keypress(function(event){
	        var enterOkClass =  $(this).attr('class');
	        if (event.which == 13 && enterOkClass != 'enterSubmit' ) {  // add  'enterSubmit' class to any button for which submit on  enter should not be disabled
	            event.preventDefault();
	            //$('#student_id').blur();
	            $('input, select, button, submit').each(function(){
   			var $input = $(this);			   			
   			$input.blur();
		});
	            return false;   
	        }
    	});
});

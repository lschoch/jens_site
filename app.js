$(document).ready(function() {
	$_path = $(location).attr('pathname');

	//reset profile_form, disable all buttons except  student_id,  reenable after student_id has been entered and the form populated with archived data, if any
	function  startOver() {
		//reset profile_form
		$('#profile_form').get(0).reset(); 
		// disable selected form buttons until valid student  ID has been entered
		$('#submit_btn,  #reset_btn, .disable').each(function(){
				var prof_input = $(this);			   			
				prof_input.attr('disabled', 'disabled');
		});
		$('#student_id').focus();
	}

	function confirmExit() {
		if (formmodified == 1) {
		return "New information has not been saved.";
		}
	}

	if($_path == '/jens_site/profile.php') {  // code specific to the profile.php documents
		formmodified=0; //reset formmodified when the document is loaded
		startOver(); // reset profile_form and disable all buttons except student id

		$('form *').change(function(){ // set flag that form has been modified
			formmodified=1;
		});

		window.onbeforeunload = confirmExit;
		
		$('#submit_btn').click(function() {
			formmodified = 0; // reset formmodified after the submit button is clicked (ie, changes have been sent, OK to navigate to another page without confirmExit)
		});

		$('#reset_btn').click(function() {
			startOver(); // reset profile_form and disable all buttons except student id
		});

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

				   		found =true; // the input id was found in students.json, a valid id was entered

				   		// reenable buttons, inputs, selects after input of valid id and populating form data from students.json file
						$('input, select, button, submit').each(function(){
								var $input = $(this);			   			
								$input.removeAttr('disabled');
						});
				   		return(false);
				   	}
			   	} );
			   	if(!found) {
			   		alert("Sorry, that is not a valid Student ID. \nPlease recheck your Student ID and try again.");
			   		$('#student_id').val(' ');
			   		startOver(); // reset profile_form and disable all buttons except student id
			   	} 
			});
		});
		
		//prevent submit on input keypresses 
		$('input, selector, button').keypress(function(event){
		        var enterOkClass =  $(this).attr('class');
		        if (event.which == 13 && enterOkClass != 'enterSubmit' ) {  // add  'enterSubmit' class to any button for which submit on  enter should not be disabled
		            event.preventDefault();
		            $('input, select, button, submit').each(function(){
	   			var prof_input = $(this);			   			
	   			prof_input.blur();
			});
		            return false;   
		        }
	    	});
	}
});

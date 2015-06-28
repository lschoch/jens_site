//submit  profile form data
$(document).ready(function() {
    
// 	$('form').submit(function(e){
// 		e.preventDefault();
// 		$.ajax({
// 			type: 'post',
// 			url: 'profile.php?submit=true',
// 			data: $('form').serialize(),
// 			success: function () {
// 				document.getElementById("profile_form").reset();
// 			}
// 		});
// 	});

$('.reset_btn').click(function() {
	$('#profile_form').get(0).reset(); //clear form data when reset button is clicked
    });
});

$(window).load(function() {
    $('#profile_form').get(0).reset(); //clear form data on page load
});

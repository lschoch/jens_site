<?php
$title = "Dual Cred Eng: admin";
include("inc/header.php");
?>

<body>
<div class="container">
    <div id="center_div" class="text-center">
        <div  class="btn-group">
            <input type="button" value="Get Contact Info" id="get_contact" class="btn btn-info">
            <input type="button" value="Close Contact Info" id="close_contact" class="btn btn-success">
            <input type="button" value="Get Classes" id="get_classes" class="btn btn-info">
            <input type="button" value="Close Classes" id="close_classes" class="btn btn-success">
        </div>
    </div>
    <div id="wrapper">
        <div class="table-responsive">
            <div id='contact_div'>
            </div>
        </div>
        <div class="table-responsive">
            <div id='classes_div'>
            </div>
        </div>
    </div>
</body>


<script>
// $('#get_contact').click(function() {

    $.getJSON( 'students.json', function( data ) {
    		var contact_html;

            contact_html = "<table id='contact_table' class='table table-striped table-bordered table-compressed'><caption>Contact  info";
            contact_html += "<tr><th>Student ID</th><th>First</th><th>Last</th><th>Home Telephone</th><th>Mobile Telephone</th><th>Email</th></tr>";

    		$.each(data, function(index, value) {
    				contact_html += "<tr>";
                    contact_html += "<td>" + value.student_id + "</td><td>" + value.first + "</td><td>" + value.last + "</td><td>" + value.homtel + "</td><td>";
			        contact_html += value.mobtel + "</td><td>" + value.email + "</td>";
                    contact_html += "</tr>";
    	   	});

    	   	contact_html += "</table>";
            document.getElementById('contact_div').innerHTML += contact_html;
       	});

// });

// $('#get_classes').click(function() {

    $.getJSON( 'students.json', function( data ) {
            var classes_html;

            classes_html = "<table id='classes_table' class='table table-striped table-bordered table-compressed'><caption>Classes</caption";
            classes_html += "<tr><th>Student ID</th><th>First</th><th>Last</th>";
            classes_html += "<th>1st Period</th><th>2nd Period</th><th>3rd Period</th><th>4th Period</th><th>5th Period</th><th>6th Period</th><th>7th Period</th></tr>";

            $.each(data, function(index, value) {
                    classes_html += "<tr>";
                    classes_html += "<td>" + value.student_id + "</td><td>" + value.first + "</td><td>" + value.last + "</td>";
                    classes_html += "<td>" + value.per1 + "</td><td>" + value.per2 + "</td><td>" + value.per3 + "</td><td>" + value.per4 + "</td><td>" + value.per5 + "</td><td>";
                    classes_html += value.per6 + "</td><td>" + value.per7 + "</td>";
                    classes_html += "</tr>";
            });

            classes_html += "</table>";
            document.getElementById('classes_div').innerHTML += classes_html;
        });

// });

$('#close_contact').click(function() {
    $('#contact_table').toggle();
});

$('#close_classes').click(function() {
    $('#classes_table').toggle();
});
</script>

<?php 
    include("inc/footer.php"); 
?>

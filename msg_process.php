<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$data = $_POST;
	file_put_contents('msg.html', $data);
	$message = 'Message changes submitted.';
	echo "<SCRIPT>
	alert('$message');
	window.history.go(-1);
	</SCRIPT>";
	exit;
    }
// window.location.replace('index.php');
?>


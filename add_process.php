<?php
	
	$password = "";
	$tempArray = [];

	function random_password( $length = 8 ) {
		$password = "";
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+?"; 
		// $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
		for ($i = 0; $i < $length; $i++) {
			$password .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		return $password;
	}

	// get contents of students.json file and decode
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$file = file_get_contents("students.json");
		$stored = json_decode($file, true);
		unset($file); // prevent memory leaks for large json

		// check to see if there is already a record  in students.json that matches first and last name from the POST 
		// and if so abort with alert
		foreach ($stored as $key => $value) { //looping through the student objects
			$first = $value["first"];
			$last = $value["last"];
			$add_first = trim($_POST["add_first"]);
			$add_last = trim($_POST["add_last"]);
			if ( $first === $add_first and $last === $add_last )  {
				unset($stored[$key]);
				$message = $first . ' ' . $last . ' is already in the class list. No changes were made.';
				echo "<SCRIPT>
				alert('$message');
				window.location.replace('admin.php');
				</SCRIPT>";
				exit;			
			}
		}

		$password = random_password(8);
		$tempArray = [ 
			"student_id" => $password,
			"first" => $add_first,
			"last" => $add_last,
			"email" => " ",
			"homtel" => " ",
			"mobtel" => " ",
			"per1" => "Select",
			"per2" => "Select",
			"per3" => "Select",
			"per4" => "Select",
			"per5" => "Select",
			"per6" => "Select",
			"per7" => "Select"
		];
		array_push($stored, $tempArray);
		file_put_contents('students.json', json_encode($stored));  //save the $stored array to the json file with json encoding
		unset($stored); // release memory
		unset($tempArray); // release memory

		// alert for success
		$message = $_POST["add_first"] . " " . $_POST["add_last"]  . " was added to the class list.";
		echo "<SCRIPT>
		alert('$message');
		window.location.replace('admin.php');
		</SCRIPT>";
		exit;
		// window.history.go(-1);

	}
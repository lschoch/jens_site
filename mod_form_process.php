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

	//get contents of students.json file and decode
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$file = file_get_contents("students.json");
		$stored = json_decode($file, true);
		unset($file); // prevent memory leaks for large json

		//check to see if there is a record  in students.json that matches the first name and last name from the request form (POST) 
		//and if so output student_id as $password 
		foreach ($stored as $key => $value) { //looping through the student objects
			if ( strtolower($value["last"]) === strtolower($_POST["mod_last"])  and strtolower($value["first"]) === strtolower($_POST["mod_first"]) ) {
				$password = $value["student_id"];
			}
		}
		// if no record exists, create new password and use it as student_id for a new record in students.json
		if(!$password) {
			$password = random_password(8);
			$tempArray = [ 
				"student_id" => $password,
				"first" => $_POST["mod_first"],
				"last" => $_POST["mod_last"],
				"email" => $_POST["mod_email"],
				"homtel" => "Select",
				"mobtel" => "Select",
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
		}

		// check name against class list -or- use request ID function to enter students and create their passwords
		// send email with student ID and caution: student ID is private, do not share it with others

		header("Location: mod_form_response.php"); // redirect so that form won't be resubmitted*/
		exit;
    
	}

?>
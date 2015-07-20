<?php
	// get contents of students.json file and decode
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$file = file_get_contents("students.json");
		$stored = json_decode($file, true);
		unset($file); // prevent memory leaks for large json
		$found = false;

		// check to see if there is a record  in students.json that matches mod_del_id from the POST 
		// and if so delete (unset) the record from the data retrieved from students.json
		foreach ($stored as $key => $value) { //looping through the student objects
			$stud_id = $value["student_id"];
			$first = $value["first"];
			$last = $value["last"];
			$mod_del_id = $_POST["mod_del_id"];
			if ( $stud_id === $mod_del_id )  {
				unset($stored[$key]);
				file_put_contents('students.json', json_encode($stored));  //save the $stored array to the json file with json encoding
				unset($stored); // release memory
				unset($tempArray); // release memory
				$found = true;
				$message = 'Student ' . $first . ' ' . $last . ' was deleted from the class list.';
				echo "<SCRIPT>
				alert('$message');
				window.location.replace('admin.php');
				</SCRIPT>";
				exit;			
			}
		}
		
		// alert for name not in students.json
		if(!$found) {
			$message = 'Sorry, that is not a valid Student ID.';
			echo "<SCRIPT>
			alert('$message');
			window.location.replace('admin.php');
			</SCRIPT>";
			exit;
			// window.history.go(-1);
			
		}

	}

?>
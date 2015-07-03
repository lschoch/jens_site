<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $file = file_get_contents("students.json");
        $stored = json_decode($file, true);
        unset($file); // prevent memory leaks for large json
    
        // initialize any empty values
        foreach($_POST as $key => $value) {
            if ($_POST[$value] === "") {
                $_POST[$value] = " ";
            }
        }

        // search json file to find a record that matches the input student_id,  add form data to the record
        foreach ($stored as $key => $value) { //looping through the student objects
            foreach ($value as $k => $val) { //looping through the  values for an individual student
                if ($k === "student_id" and $val === $_POST["student_id"])  { // look for a match to the input student_id
                    $stored[$key] = $_POST; // save the $_post data to the $stored array
                }
            } 
        }

        file_put_contents('students.json', json_encode($stored));  //save the $stored array to the json file with json encoding
        unset($stored); // release memory
        header("Location: profile_response.php"); // redirect so that form won't be resubmitted
        exit;
    
    }

?>

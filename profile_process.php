<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = "students.json";
    $data = json_encode($_POST) . "\n";
    file_put_contents($file, $data,  FILE_APPEND | LOCK_EX);
    header("Location: profile_response.php");
    exit;
}

?>

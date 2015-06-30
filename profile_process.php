<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = "profiles.txt";
    $first = $_POST["first"];
    $last = $_POST["last"];
    $homtel = $_POST["homtel"];
    $mobtel = $_POST["mobtel"];
    $email =  $_POST["email"];
    $per1 = $_POST["per1"];
    $per2 = $_POST["per2"];
    $per3 = $_POST["per3"];
    $per4 = $_POST["per4"];
    $per5 = $_POST["per5"];
    $per6 = $_POST["per6"];
    $per7 = $_POST["per7"];
    //$data = "";
    $data = $data.$first.",";
    $data = $data.$last.",";
    $data = $data.$homtel.",";
    $data = $data.$mobtel.",";
    $data = $data.$email.",";
    $data = $data.$per1.",";
    $data = $data.$per2.",";
    $data = $data.$per3.",";
    $data = $data.$per4.",";
    $data = $data.$per5.",";
    $data = $data.$per6.",";
    $data = $data.$per7."\n";
    file_put_contents($file, $data,  FILE_APPEND | LOCK_EX);
    //console.log("+++++++++++++");
    header("Location: form_response.php");
    exit;
}
?>
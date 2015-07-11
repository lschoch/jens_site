<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST;
        file_put_contents('msg.html', $data);
        header("Location: admin.php"); // redirect so that form won't be resubmitted*/
        exit;
    }

?>


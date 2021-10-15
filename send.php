<?php

    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';

    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';

    $email = isset($_POST['email']) ? $_POST['email'] : '';

    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    $message = isset($_POST['message']) ? $_POST['message'] : '';


    if ($fname && $lname && $email && $phone && $message && $fname =! "" || $lname =! "" || $email =! "" || $phone =! "" || $message =! "") {
        header("Location: success.php");
    } else {
        header("Location: index.php?status=0");
    }

?>
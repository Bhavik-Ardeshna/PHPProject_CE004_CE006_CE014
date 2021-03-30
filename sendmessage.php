<?php
    require_once 'db/config.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        echo "hello";
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = "INSERT INTO contactus VALUES ('" . $name . "','" . $email . "','" . $message . "')";
        $result = mysqli_query($conn, $query);
        header('location:contact.php?m=s');
        exit();
    }
?>
<?php
    require_once '../db/config.php';

    $name = $_GET['n'];
    echo $name;

    $query = "DELETE FROM hotel_data WHERE hotel_name=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $stmt->close();
    header('location: home.php');
    exit();
?>
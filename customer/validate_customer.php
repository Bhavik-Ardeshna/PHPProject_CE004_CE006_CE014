<?php
$title = "User";
require_once '../db/config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $psd = $_POST['psd'];

    $query = "SELECT * FROM user";

    if ($result = mysqli_query($conn, $query)) {
        $flag = 0;
        while ($data = mysqli_fetch_assoc($result)) {
            echo $data['name'];
            if ($data['name'] == $name and $data['password'] == $psd) {
                $flag = 1;
                break;
            }
        }

        if ($flag == 1) {
            $_SESSION['AUTH_AGENCY_USER'] = $name;
            header("Location: home.php");
            exit();
        } else {
            $_SESSION['ERROR_LOGIN_USER'] = 'Invalid Login Details';
            header("Location: index.php");
            exit();
        }
    }
}

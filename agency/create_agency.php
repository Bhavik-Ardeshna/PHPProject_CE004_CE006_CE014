<?php
$title = "Admin";
require_once '../includes/header.php';
require_once '../db/config.php';

?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/login.css">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $bname = $_POST['bname'];
    $accno = $_POST['accno'];
    $loc = $_POST['loc'];
    $password = $_POST['psd'];

    $q = "INSERT INTO agency VALUES ('" . $name . "','" . $email . "','" . $type . "','" . $bname . "','" . $accno . "','" . $loc . "','" . $password . "')";


    $r = mysqli_query($conn, $q);
}

?>


<div class="container">
    <form class="login-form" action="create_agency.php" method="post">
        <div id="hello">Hello!</div>
        <div class="good">Good Morning!</div>
        <div class="acc">
            <span style="color:#398dfa">Create</span> Your Organization Account</div>

        <div class="input">
            <input id="name" type="text" name="name" placeholder="Organization name" /></div>

        <div class="input">
            <input id="email" type="email" name="email" placeholder="Your email" /></div>

        <div class="input">
            <input id="type" type="type" name="type" placeholder="Type" /></div>

        <div class="input">
            <input id="bname" type="bname" name="bname" placeholder="Your bank name" /></div>

        <div class="input">
            <input id="accno" type="accno" name="accno" placeholder="Your account no" /></div>

        <div class="input">
            <input id="loc" type="loc" name="loc" placeholder="Your location" /></div>

        <div class="input">
            <input id="psd" type="password" name="psd" placeholder="Password" /></div>

        <input id="wyslij" type="submit" value="Sign Up" />
        <div class="info"></div>
        <div class="foo">Forgot password?</div>
        <a href="/PHPProject_CE004_CE006_CE014/agency">
            <div class="foo">
                <span style="color:#398dfa ">Login</span>
            </div>
        </a>
    </form>

</div>

<?php
require_once '../includes/footer.php';
?>
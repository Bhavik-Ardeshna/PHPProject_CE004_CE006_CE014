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
    $contact = $_POST['contact'];
    $password = $_POST['psd'];
    $query = "INSERT INTO user VALUES ('" . $name . "','" . $email . "','" . $contact . "','" . $password . "')";

    $result = mysqli_query($conn, $query);
}

?>


<div class="container">
    <form class="login-form" action="create_customer.php" method="post">
        <div id="hello">Hello!</div>
        <div class="good">Good Morning!</div>
        <div class="acc">
            <span style="color:#398dfa">Create</span> Your User Account</div>

        <div class="input">
            <input id="name" type="text" name="name" placeholder="Username" /></div>

        <div class="input">
            <input id="email" type="email" name="email" placeholder="Your email" /></div>

        <div class="input">
            <input id="contact" type="tel" name="contact" placeholder="Your contact no" /></div>

        <div class="input">
            <input id="psd" type="password" name="psd" placeholder="Password" /></div>

        <input id="wyslij" type="submit" value="Sign Up" />
        <div class="info"></div>
        <div class="foo">Forgot password?</div>
        <a href="/GoTrip/admin">
            <div class="foo">
                <span style="color:#398dfa ">Login</span>
            </div>
        </a>
    </form>

</div>

<?php
require_once '../includes/footer.php';
?>
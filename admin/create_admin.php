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
    $password = $_POST['psd'];

    $query = "INSERT INTO admin_data VALUES ('" . $name . "','" . $email . "','" . $password . "')";
    $result = mysqli_query($conn, $query);
}

?>


<div class="container">
    <form class="login-form" action="create_admin.php" method="post">
        <div id="hello">Hello!</div>
        <div class="good">Good Morning!</div>
        <div class="acc">
            <span style="color:#398dfa">Create</span> Your Admin Account</div>

        <div class="input">
            <input id="name" type="text" name="name" placeholder="Username" /></div>

        <div class="input">
            <input id="email" type="email" name="email" placeholder="Your email" /></div>

        <div class="input">
            <input id="psd" type="password" name="psd" placeholder="Password" /></div>

        <input id="wyslij" type="submit" value="Sign Up" />
        <div class="info"></div>
        <div class="foo">Forgot password?</div>
        <a href="/PHPProject_CE004_CE006_CE014/admin">
            <div class="foo">
                <span style="color:#398dfa ">Login</span>
            </div>
        </a>
    </form>

</div>

<?php
require_once '../includes/footer.php';
?>
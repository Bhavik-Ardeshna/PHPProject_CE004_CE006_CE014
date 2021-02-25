<?php
$title = "Agency";
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/login.css">

<div class="container">
    <form class="login-form" action="validate_agency.php" method="post">
        <div class="acc">
            <?php
            session_start();
            if (!empty($_SESSION['ERROR_BEFORE_LOGIN_AGENCY'])) {
                echo $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'];
                unset($_SESSION['ERROR_BEFORE_LOGIN_AGENCY']);
            }

            ?>
            <?php
            session_start();
            if (!empty($_SESSION['ERROR_LOGIN_AGENCY'])) {
                echo $_SESSION['ERROR_LOGIN_AGENCY'];
                unset($_SESSION['ERROR_LOGIN_AGENCY']);
            }

            ?>

        </div>
        <div id="hello">Hello!</div>
        <div class="good">Good Morning!</div>
        <div class="acc">
            <span style="color:#398dfa">Login</span> Organization Account</div>

        <div class="input">
            <input id="name" type="text" name="name" placeholder="Username" /></div>

        <div class="input">
            <input id="email" type="email" name="email" placeholder="Your email" /></div>

        <div class="input">
            <input id="psd" type="password" name="psd" placeholder="Password" /></div>

        <input id="wyslij" type="submit" value="Login" />
        <div class="info"></div>
        <div class="foo">Forgot password?</div>
        <a href="create_agency.php">
            <div class="foo">
                <span style="color:#398dfa ">Create Account</span>
            </div>
        </a>
    </form>

</div>


<?php
require_once '../includes/footer.php';
?>
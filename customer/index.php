<?php
$title = "Customer";
require_once '../includes/header.php';
include './static/css/home.css';
?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/login.css">

<div class="container">
    <form class="login-form" action="validate_customer.php" method="post">
        <div class="acc">
            <?php
            session_start();
            if (!empty($_SESSION['ERROR_BEFORE_LOGIN_USER'])) {
                echo $_SESSION['ERROR_BEFORE_LOGIN_USER'];
                unset($_SESSION['ERROR_BEFORE_LOGIN_USER']);
            }

            ?>
            <?php
            session_start();
            if (!empty($_SESSION['ERROR_LOGIN_USER'])) {
                echo $_SESSION['ERROR_LOGIN_USER'];
                unset($_SESSION['ERROR_LOGIN_USER']);
            }

            ?>
        </div>
        <div id="hello">Hello!</div>
        <div class="good">Good Morning!</div>
        <div class="acc">
            <span style="color:#398dfa">Login</span> User Account</div>

        <div class="input">
            <input id="name" type="text" name="name" placeholder="Username" /></div>

        <div class="input">
            <input id="email" type="email" name="email" placeholder="Your email" /></div>

        <div class="input">
            <input id="psd" type="password" name="psd" placeholder="Password" /></div>

        <input id="wyslij" type="submit" value="Login" />
        <div class="info"></div>
        <div class="foo">Forgot password?</div>
        <a href="create_customer.php">
            <div class="foo">
                <span style="color:#398dfa ">Create Account</span>
            </div>
        </a>
    </form>

</div>
<?php
require_once '../includes/footer.php';
?>
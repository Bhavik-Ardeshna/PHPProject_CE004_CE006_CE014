<?php
$title = "Login";
require_once 'includes/header.php';
?>
<link rel="stylesheet" href="static/css/login.css">

<div class="container main__box">

    <div class=" box-border h-72 w-auto p-2 border-1">

        <div class="good" style="font-size:1em">Welcome to GoTrip!</div>
        <div class="acc" style="font-size:1em">
            <span style="color:#398dfa">Login</span> To Respective Account</div>

        <a href="/GoTrip/admin"> <input id="wyslij" type="submit" value="Admin" /></a>
        <a href="/GoTrip/agency"><input id="wyslij" type="submit" value="Organization" /></a>
        <a href="/GoTrip/customer"> <input id="wyslij" type="submit" value="User" /></a>

    </div>
</div>
<?php
require_once 'includes/footer.php';
?>
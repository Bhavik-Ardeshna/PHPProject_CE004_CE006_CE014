<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_USER'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'] = 'Login as User Please!!';
    header("Location: index.php");
    exit();
}
?>

<?php
$title = "Agency";
require_once '../includes/header.php';
require_once '../db/config.php';
?>
<link rel="stylesheet" href="../static/css/payment.css">
<link rel="stylesheet" href="../static/css/home.css">

<h2 class="successmsg">Payment Successful</h2>
<img class="success" src="../static/img/confirmorder.png">
<h3 class="link">Click <a class="blue" href="home.php">here</a> to view User panel.</h3>
<?php
require_once '../includes/footer.php';
?>
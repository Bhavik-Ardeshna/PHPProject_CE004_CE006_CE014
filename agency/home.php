<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_NAME'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'] = 'Login as Organization Please!!';
    header("Location: index.php");
    exit();
}
?>

<?php
$title = "Admin";
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/login.css">


<h1>Organization Panel</h1>

<?php
require_once '../includes/footer.php';
?>
<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_NAME'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'] = 'Login as Organization Please!!';
    header("Location: index.php");
    exit();
}
if (!empty($_SESSION['HOTEL_ADDED'])) {
    echo $_SESSION['HOTEL_ADDED'];
    unset($_SESSION['HOTEL_ADDED']);
}
?>

<?php
    $title = "Agency";
    require_once '../includes/header.php';
    ?>
    <link rel="stylesheet" href="../static/css/hotelform.css">
    <link rel="stylesheet" href="../static/css/home.css">
    <!-- <link rel="stylesheet" href="../static/css/login.css"> -->


    <h1 class="hotelform-heading">Organization Panel</h1>
    <button class="blockbtn" id="wyslij"> 
        <a href="addHotel.php">Add New Hotel</a>
    </button>
    <br><br>
<?php
require_once '../includes/footer.php';
?>
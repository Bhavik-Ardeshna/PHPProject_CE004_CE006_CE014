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
    require_once '../db/config.php';
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
    $query = "SELECT * FROM hotel_data";
    if($result = mysqli_query($conn, $query))
    {
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<div class='hotels'>";
            
                echo "<button class='edit-hotel-btn'>";
                echo "<a href='viewHotel.php?n=".$data['hotel_name']."'>View Information</a>";
                echo "</button>";

                echo "<img src='".$data['hotelimg']."'>";

                echo "<div class='information'>";
                    echo "<div id='hotel-name'>".$data['hotel_name']."</div>";
                    echo "Email: ".$data['email']."<br>";
                    echo "Address: ".$data['address']."<br>";
                    echo "State: ".$data['state']."<br>";
                    echo "Contact no.: ".$data['contactno']."<br><br>";
                    echo "<div id='status'>";
                        echo "*SingleBed rooms: ".$data['singlestatus']."<br>";
                        echo "*DoubleBed rooms: ".$data['doublestatus']."<br>";
                    echo "</div>";
                echo "</div>";
                
            echo "</div>";
           
        }
    }
    ?>

    <br><br>

<?php
require_once '../includes/footer.php';
?>
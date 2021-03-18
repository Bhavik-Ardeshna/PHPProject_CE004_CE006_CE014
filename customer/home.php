<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_USER'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_USER'] = 'Login as User Please!!';
    header("Location: index.php");
    exit();
}
?>

<?php
$title = "Admin";
require_once '../includes/header.php';
require_once '../db/config.php';
?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/hotelform.css">
<link rel="stylesheet" href="../static/css/login.css">


<h1>User Panel</h1>
<?php
    $query = "SELECT * FROM hotel_data";
    if($result = mysqli_query($conn, $query))
    {
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<div class='hotels'>";
            
                echo "<button class='edit-hotel-btn'>";
                echo "<a href=#>View Information</a>";
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

<?php
require_once '../includes/footer.php';
?>
<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_NAME'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'] = 'Login as Organization Please!!';
    header("Location: index.php");
    exit();
}
if (!empty($_SESSION['HOTEL_ADDED'])) {
    echo "<button class='hotel-added'>";
    echo $_SESSION['HOTEL_ADDED'];
    echo "</button>";
    unset($_SESSION['HOTEL_ADDED']);
}
?>

<?php
    $title = "Agency";
    require_once '../includes/header.php';
    require_once '../db/config.php';
?>
<link rel="stylesheet" href="../static/css/index.css">
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
    ?>
    <section class="places mb-20">
        <div class="places-text">
            <small>FEATURED TOURS PACKAGES</small>
            <h2>Favourite Places</h2>
        </div>
        <div class="cards">
    <?php
        while($data = mysqli_fetch_assoc($result))
        {
    ?>
            <div class="card">
                <button class='edit-hotel-btn'>
                    <a href='viewHotel.php?n=<?php echo $data['hotel_name'] ?>'>View Information</a>
                </button><br><br>
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="<?php echo $data['hotelimg'] ?>">
                    </div>
                </div>

                <div class="text">
                    <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                    <h2><?php echo $data['hotel_name'] ?></h2>
                    <?php if(isset($data['singleprice'])){ ?>
                    <p class="cost">SingleBed room: $<?php echo $data['singleprice'] ?> / Per Person</p>
                    <?php } ?>
                    <?php if(isset($data['doubleprice'])){ ?>
                    <p class="cost">DoubleBed room: $<?php echo $data['doubleprice'] ?> / Per Person</p>
                    <?php } ?>
                    <div class="card-box">
                        <p class="time">&#128339; 3 Days</p>
                        <p class="location">&#9992;<?php echo $data['state'] ?></p>
                    </div>
                </div>
            </div>
        <?php   
        }
        ?>
        </div>
    </section>
    <?php
    }
    ?>

    <br><br>

<?php
require_once '../includes/footer.php';
?>
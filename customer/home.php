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
<link rel="stylesheet" href="../static/css/index.css">
<link rel="stylesheet" href="../static/css/home.css">


<h1 class="hotelform-heading">User Panel</h1>
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
                    <a href='viewHotel.php?n=<?php echo $data['hotel_name'] ?>'>View Hotel</a>
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
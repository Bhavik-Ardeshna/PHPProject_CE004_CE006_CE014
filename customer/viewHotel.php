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
<link rel="stylesheet" href="../static/css/hotelform.css">
<link rel="stylesheet" href="../static/css/home.css">
<!-- <link rel="stylesheet" href="../static/css/login.css"> -->

    <br><br>
    <?php
        $name = $_GET['n'];
        $query = "SELECT * FROM hotel_data WHERE hotel_name='".$name."'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
    ?>
    <div class="hotel-info">
        <h1 id='hotel-name'><?php echo $data['hotel_name']; ?></h1>
        <br><br>
        <div class="left">
            <img src="<?php echo $data['hotelimg'] ?>">
        </div>
        <div class="right">
            <div class="information">
                <b>Email: </b><?php echo $data['email']; ?><br><br>
                <b>Address: </b><?php echo $data['address']; ?><br><br>
                <b>State: </b><?php echo $data['state']; ?><br><br>
                <b>Contact no.: </b><?php echo $data['contactno']; ?><br><br>
                <div id='status'>
                    <b>*SingleBed rooms: </b><?php echo $data['singlestatus']; ?><br><br>
                    <b>*DoubleBed rooms: </b><?php echo $data['doublestatus']; ?><br><br>
                </div>
            </div>
        </div>
        <br>
        <?php if(isset($data['singleimg'])) { ?>
        <div class="room-info">
            <h2 id='room-heading'>*SingleBed room</h2>
            <div class="left">
                <img id="roomimg" src="<?php echo $data['singleimg'] ?>">
            </div>
            <div class="right">
                <div class="information">
                    <b>Price: </b><?php echo $data['singleprice']; ?>/-<br><br>
                    <b>Available: </b><?php echo $data['singleavailable']; ?> rooms<br><br>
                </div>
            </div>
            <button class="edit-hotel-btn">
            <a href="#">Book room</a>
            </button>
        </div>
        <?php } ?>

        <?php if(isset($data['doubleimg'])) { ?>
        <div class="room-info">
            <h2 id='room-heading'>*DoubleBed room</h2>
            <div class="left">
                <img id="roomimg" src="<?php echo $data['doubleimg'] ?>">
            </div>
            <div class="right">
                <div class="information">
                    <b>Price: </b><?php echo $data['doubleprice']; ?>/-<br><br>
                    <b>Available: </b><?php echo $data['doubleavailable']; ?> rooms<br><br>
                </div>
            </div>
            <button class="edit-hotel-btn">
            <a href="#">Book room</a>
            </button>
        </div>
        <?php } ?>
    </div>

<?php
require_once '../includes/footer.php';
?>
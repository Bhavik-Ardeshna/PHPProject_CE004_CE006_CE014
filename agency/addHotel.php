<?php
session_start();
if (empty($_SESSION['AUTH_AGENCY_NAME'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_AGENCY'] = 'Login as Organization Please!!';
    header("Location: index.php");
    exit();
}
if (!empty($_SESSION['IMAGE_ERROR'])) {
    echo $_SESSION['IMAGE_ERROR'];
    unset($_SESSION['IMAGE_ERROR']);
}
?>

<?php
$title = "Agency";
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="../static/css/home.css">
<link rel="stylesheet" href="../static/css/login.css">
<link rel="stylesheet" href="../static/css/hotelform.css">

<div class="hotel-form">
    <form action="validateHotel.php" method="POST" enctype="multipart/form-data">
        <h1 class="hotelform-heading">Fill up this form to add new hotel</h1>
        <div class="input">
            <input id="hotelname" type="text" name="hotelname" placeholder="Hotel Name" required/>
        </div>

        <div class="input">
            <input id="hotelemail" type="text" name="hotelemail" placeholder="Hotel's Email" required/>
        </div>

        <div class="input">
            <input id="hotelphno" type="text" name="hotelphno" placeholder="Hotel's Contact Number" required/>
        </div>

        <div class="input">
            <input id="address" type="text" name="address" placeholder="Hotel's Address" required/>
        </div>
    
        <input id="hotelimg" type="file" name="hotelimg" required/><br><br>
        
        <label for="hotelstate">State:</label>

        <select name="hotelstate" id="cars">
        <option value="Gujarat">Gujarat</option>
        <option value="Delhi">Delhi</option>
        <option value="Punjab">Punjab</option>
        <option value="Karnataka">Karnataka</option>
        </select><br><br>
        
        <hr><br>

        <input type="radio" name="singlebed" value="singlebed"/>  SingleBed rooms<br><br>
        <div class="rooms">
            <div class="input">
                <input id="singleprice" type="number" name="singleprice" placeholder="Enter price for singlebed rooms"/>
            </div>
            <div class="input">
                <input id="savailable" type="number" name="savailable" placeholder="Enter availability for singlebed rooms"/>
            </div>
            <input id="singleimg" type="file" name="singleimg" value="Upload rooms's picture"/><br><br>
        </div>

        <hr><br>

        <input type="radio" name="doublebed" value="doublebed"/>  DoubleBed rooms<br><br>
        <div class="rooms">
            <div class="input">
                <input id="doubleprice" type="number" name="doubleprice" placeholder="Enter price for doublebed rooms"/>
            </div>
            <div class="input">
                <input id="davailable" type="number" name="davailable" placeholder="Enter availability for doublebed rooms"/>
            </div>
            <input id="doubleimg" type="file" name="doubleimg" value="Upload rooms's picture"/><br><br>
        </div>
        <input id="wyslij" type="submit" value="Save Changes"/>
    </form>
</div>
<?php
require_once '../includes/footer.php';
?>
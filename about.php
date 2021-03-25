<?php
$title = "About Us";
require_once 'includes/header.php';
?>

<link rel="stylesheet" href="./static/css/about.css">


<section class="about">
    <div class="about-img">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293719/outdoor_tjjhxk.jpg">
    </div>
    <div class="about-text">
        <small>ABOUT OUR COMPANY</small>
        <h2>We are Go Trip Ravels Support Company</h2>
        <p>This is what holidays, travels, vacations are about. It is not really rest or even leisure we chase. We strain to renew our capacity to wonder, to shock ourselves into astonishment once again.</p>
        <small class="mb-5"><b>Creator and Maintainer of GoTrip</b></small>
        <label><input type="checkbox" checked><?php echo "  "; ?>Bhavik Ardeshna</label>
        <label><input type="checkbox" checked><?php echo "  "; ?>Birva Babaria</label>
        <label><input type="checkbox" checked><?php echo "  "; ?>Riddhi Chaudhari</label>
        <a href="#">ABOUT US</a>
    </div>
</section>


<?php
require_once 'includes/footer.php';
?>
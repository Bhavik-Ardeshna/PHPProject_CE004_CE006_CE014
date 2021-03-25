<?php
$title = "Home";
require_once 'includes/header.php';
?>


<link rel="stylesheet" href="./static/css/index.css">

<section class="banner">
    <div class="flex flex-col w-max flex-wrap">
        <div class="banner-heading">
            <h1>Find your Next tour!</h1>
        </div>
        <form class="form text-black ">
            <input class="px-5 input-box mr-4" type="text" list="mylist" placeholder="Where would you like to go?">
            <datalist id="mylist">
                <option>London</option>
                <option>Canada</option>
                <option>Monaco</option>
                <option>France</option>
                <option>Japan</option>
                <option>Switzerland</option>
                <option>Seoul</option>
            </datalist>
            <input type="date" class="input-box  mr-4">
            <a href="#" class="input-box  bg-yellow-500 book-button mr-4">Book</a>
        </form>
    </div>
</section>



<section class="flex items-center justify-center ">
    <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png">
        <h2>8000+ Our Local Guides</h2>
    </div>
    <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png">
        <h2>100% Trusted Tour Agency</h2>
    </div>
    <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png">
        <h2>28+ Years of Travel Experience</h2>
    </div>
    <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png">
        <h2>98% Our Travelers are Happy</h2>
    </div>
</section>


<!--==============Places===================-->
<section class="places mb-20">
    <div class="places-text">
        <small>FEATURED TOURS PACKAGES</small>
        <h2>Favourite Places</h2>
    </div>

    <div class="cards">
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293736/james-wheeler_xqmq2y.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Vancouver, Canada</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293755/paris_uj8wum.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Paris, France</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293955/monaco_usu7xb.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Monaco, Monaco</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293874/switzerland_tubxcm.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Bern, Switzerland</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293673/korea_bxrcj5.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Seoul, South Korea</p>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="zoom-img">
                <div class="img-card">
                    <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293673/night-4336403_1920_demehp.jpg">
                </div>
            </div>

            <div class="text">
                <span class="rating">&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                <h2>The Dark Forest Adventure</h2>
                <p class="cost">$1870 / Per Person</p>
                <div class="card-box">
                    <p class="time">&#128339; 3 Days</p>
                    <p class="location">&#9992; Tokyo, japan</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require_once 'includes/footer.php';
?>
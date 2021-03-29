<?php
session_start();
if (empty($_SESSION['AUTH_ADMIN_NAME'])) {
    $_SESSION['ERROR_BEFORE_LOGIN_ADMIN'] = 'Login as Admin Please!!';
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


<div class="antialiased md:bg-gray-100 mt-16 mb-16">

    <!--Parent div-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        <!--First card-->
        <div class="md:p-8 p-2 bg-white">
            <!--Banner image-->
            <img class="rounded-lg w-full" src="https://images.unsplash.com/photo-1615592389070-bcc97e05ad01?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />


            <!--Title-->
            <h1 class="font-semibold text-gray-900 leading-none text-xl mt-3 capitalize truncate">
                Bhavik Ardeshna
            </h1>
            <!--Description-->
            <div class="max-w-full">
                <p class="text-base font-medium tracking-wide text-gray-600 mt-1">
                    <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30px" width="30px">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        ardeshnabhavik@gmailcom
                    </p>
                    <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                        GSSoC'21 || Intern at Heliconia Solutions Pvt. Ltd || Open Source Contibutor || Data Science Enthusiastic || Exploring Big-Data || MERN Developer
                    </p>
                </p>
                <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="30px" width="30px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <a href="https://github.com/Bhavik-Ardeshna">Bhavik-Ardeshna</a>
                </p>
            </div>

        </div>
        <!--End of first card-->

        <!--Second Tag-->
        <div class="p-8 bg-white">
            <!--Banner image-->
            <img class="rounded-lg w-full" src="https://images.unsplash.com/photo-1559918195-338cc1267f3c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1481&q=80" />

            <!--Title-->
            <h1 class="font-semibold text-gray-900 leading-none text-xl mt-3 capitalize truncate">
                Birva Babaria
            </h1>
            <!--Description-->
            <div class="max-w-full">
                <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30px" width="30px">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    birvababaria@gmail.com
                </p>
                <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                    GSSoC'21 || Intern at Heliconia Solutions Pvt. Ltd || Open Source Contibutor || Data Science Enthusiastic || Exploring Big-Data || MERN Developer
                </p>
                <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="30px" width="30px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <a href="https://github.com/birva-babaria">birva-babaria</a>
                </p>
            </div>

        </div>
        <!--End of first card-->

        <!--Third  card-->
        <div class="p-8 bg-white">
            <!--Banner image-->
            <img class="h-80 rounded-lg w-full object-cover object-center" src="https://images.unsplash.com/photo-1614583225154-5fcdda07019e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1368&q=80">

            <!--Title-->
            <h1 class="font-semibold text-gray-900 leading-none text-xl mt-3 capitalize truncate">
                Riddhi Chaudhari
            </h1>
            <!--Description-->
            <div class="max-w-full">
                <p class="text-base font-medium tracking-wide text-gray-600 mt-1">
                    <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="30px" width="30px">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        ridchaudhari18@gmail.com
                    </p>
                    <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                        B.Tech Student,DDU Nadiad || Music Enthusiastic
                </p>
                    <p class="text-base flex font-medium tracking-wide text-gray-600 mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="30px" width="30px">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <a href="https://github.com/RiddhiChaudhari">RiddhiChaudhari</a>
                    </p>
                </p>
            </div>

        </div>
        <!--End of first card-->
    </div>
    <!--End of parent div-->

    <script src="" async defer></script>
</div>


<?php
require_once '../includes/footer.php';
?>
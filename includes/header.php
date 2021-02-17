<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/css/home.css">
    <title>Go Trip - <?php echo $title; ?></title>
</head>

<body>



    <div class="flex w-full flex-wrap shadow-2xl sticky items-center justify-center z-50">
        <div class="logo ">
            Go Trip
        </div>
        <div class="nav-bar">
            <ul class=" flex md:col flex-wrap nav-text px-10">
                <li class="px-5"><a href="/GoTrip" class="hover:text-yellow-500">Home</a></li>
                <li class="px-5"><a href="/GoTrip/login.php" class="hover:text-yellow-500">Login</a></li>
                <li class="px-5"><a href="#" class="hover:text-yellow-500">Tours</a></li>
                <li class="px-5"><a href="/GoTrip/about.php" class="hover:text-yellow-500">About us</a></li>
                <li class="px-5"><a href="/GoTrip/contact.php" class="hover:text-yellow-500">Contact us</a></li>
            </ul>
        </div>

    </div>
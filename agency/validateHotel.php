<?php
    $title = "Agency";
    require_once '../db/config.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //collecting basic information about the hotel
        $name = $_POST['hotelname'];
        $email = $_POST['hotelemail'];
        $contact = $_POST['hotelphno'];
        $address = $_POST['address'];
        $state = $_POST['hotelstate'];
        if(isset($_FILES['hotelimg']))
        {
            $file_name = $_FILES['hotelimg']['name'];
            $file_tmp =$_FILES['hotelimg']['tmp_name'];
            $file_type=$_FILES['hotelimg']['type'];
            $img = "../static/img/".$file_name;
        
            if ($file_type== "image/jpg" OR $file_type== "image/png" OR $file_type== "image/jpeg" OR $file_type== "image/JPEG" OR $file_type== "image/PNG" OR $file_type== "image/JPG"){
                move_uploaded_file($file_tmp,$img);
            }
            else{
                $_SESSION['IMAGE_ERROR'] = "Please enter hotel valid image";
                header("Location: addHotel.php");
                exit();
            }
        }
        $query = "INSERT INTO hotel_data(hotel_name,email,contactno,address,hotelimg,state) VALUES ('" . $name . "','" . $email . "','" . $contact . "','" . $address . "','" . $img . "','" . $state . "')";
        $r = mysqli_query($conn, $query);

        //collecting information about rooms (SINGLE BED ROOMS)
        if(isset($_POST['singlebed']))
        {
            $status = "present";
            $price = $_POST['singleprice'];
            $available = $_POST['savailable'];
            if(isset($_FILES['singleimg']))
            {
                $file_name = $_FILES['singleimg']['name'];
                $file_tmp =$_FILES['singleimg']['tmp_name'];
                $file_type=$_FILES['singleimg']['type'];
                $img = "../static/img/".$file_name;
            
                if ($file_type== "image/jpg" OR $file_type== "image/png" OR $file_type== "image/jpeg" OR $file_type== "image/JPEG" OR $file_type== "image/PNG" OR $file_type== "image/JPG"){
                    move_uploaded_file($file_tmp,$img);
                }
                else{
                    $_SESSION['IMAGE_ERROR'] = "Please enter valid singleBed room image";
                    header("Location: addHotel.php");
                    exit();
                }
            }
            $query = "UPDATE hotel_data SET singlestatus=?, singleprice=?, singleavailable=?, singleimg=? WHERE hotel_name=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("siiss",$status,$price,$available,$img,$name);
            $stmt->execute();
            $stmt->close();
        }

        //collecting information about rooms (DOUBLE BED ROOMS)
        if(isset($_POST['doublebed']))
        {
            $status = "present";
            $price = $_POST['doubleprice'];
            $available = $_POST['davailable'];
            if(isset($_FILES['doubleimg']))
            {
                $file_name = $_FILES['doubleimg']['name'];
                $file_tmp =$_FILES['doubleimg']['tmp_name'];
                $file_type=$_FILES['doubleimg']['type'];
                $img = "../static/img/".$file_name;
            
                if ($file_type== "image/jpg" OR $file_type== "image/png" OR $file_type== "image/jpeg" OR $file_type== "image/JPEG" OR $file_type== "image/PNG" OR $file_type== "image/JPG"){
                    move_uploaded_file($file_tmp,$img);
                }
                else{
                    $_SESSION['IMAGE_ERROR'] = "Please enter valid doubleBed room image";
                    header("Location: addHotel.php");
                    exit();
                }
            }
            $query = "UPDATE hotel_data SET doublestatus=?, doubleprice=? ,doubleavailable=?, doubleimg=? WHERE hotel_name=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("siiss",$status,$price,$available,$img,$name);
            $stmt->execute();
            $stmt->close();
        }

    }
    $_SESSION['HOTEL_ADDED'] = "Hotel Added";
    header("Location: home.php");
    exit();
?>
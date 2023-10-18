<?php
    include 'config.php';
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bloodGrp = $_POST['b_Grp'];
    $city = $_POST['city'];
    $phoneNumber = $_POST['mobileNo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM donor WHERE name='$name' OR email='$email' OR phoneNumber='$phoneNumber'";
    // $result = $conn->query($check_query);
    $result = mysqli_query($conn, $check_query);


    if (mysqli_num_rows($result) > 0) {
        echo "User with the same username, and/or email, and/or phone number already exists.";
    }
    else {
        // data insertion
        $sql = "INSERT INTO donor (`name`,`age`,`gender`,`bloodGrp`,`city`,`phoneNumber`,`email`,`password`) VALUES ('$name','$age','$gender','$bloodGrp','$city','$phoneNumber','$email','$password')";

        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Account created successfully. Now you can Sign In using your email and password.")</script>';
        }
        else {
            echo '<script>alert("Oops! Something went wrong. Please try again.")</script>';
        }
    }

    // // mobile number check
    // $_mobile = $_POST['mobileNo'];

    // $sql = "SELECT phoneNumber FROM donor WHERE phoneNumber='$_mobile'";
    // $result = mysqli_query($conn, $sql);
    // if(mysqli_num_rows($result)>0){
    //     echo '<script>alert("This number already exists.")</script>';
    // }
    // else {
    //     $$phoneNumber = $_POST['mobileNo'];
    // }

    // email check
    // $email_check = $_POST['email'];

    // $sql = "SELECT email FROM donor WHERE email='$email_check'";
    // $result = mysqli_query($conn, $sql);
    // if(mysqli_num_rows($result)>0){
    //     echo '<script>alert("This email already exists.")</script>';
    // }
    // else {
    //     $email = $_POST['email'];
    // }

    // echo "Hello world!";

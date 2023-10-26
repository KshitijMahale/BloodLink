<?php
    include '../include/config.php';
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bloodGrp = $_POST['b_Grp'];
    $city = $_POST['city'];
    $phoneNumber = $_POST['mobileNo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // authentication
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
            header("Location: ../donor/Dprofile.php");
            exit;
        }
        else {
            echo '<script>alert("Oops! Something went wrong. Please try again.")</script>';
        }
    }
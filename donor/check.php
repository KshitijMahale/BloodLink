<?php
    include '../include/config.php';

    session_start();
    $id = $_SESSION['id'];
    // session_destroy();

    $sql = "SELECT * FROM donor WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Sign-in successful
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $age = $row['age'];
            $gender = $row['gender'];
            $bloodGrp = $row['bloodGrp'];
            $city = $row['city'];
            $phoneNumber = $row['phoneNumber'];
            $email = $row['email'];
            $password = $row['password'];
        }
    } else {
        // Sign-in failed
        // add something more in this----------------
        echo "Invalid credentials. Please try again.";
    }
    // $conn->close();
?>
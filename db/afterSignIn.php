<?php
    include '../include/config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM donor WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Sign-in successful
        $row = $result->fetch_assoc();
        $id = $row['id'];
        session_start();
        $_SESSION['id'] = $id;
        
        header("Location: ../donor/Dprofile.php"); // Redirect to the index.php page
        exit;
    } else {
        // Sign-in failed
        echo "Invalid credentials. Please try again.";
    }
    $conn->close();
?>
<?php
    include '../include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/logo-img.png" />
    <title>BloodLink</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../nav-footer.css">
    <link rel="stylesheet" href="Dstyle.css">
    <link rel="stylesheet" href="Dprofile.css">
    <link rel="stylesheet" href="Dedit.css">
</head>
<body>
<nav>
    <a id="nav-p1" href="../index.php">
        <img src="../imgs/logo-img.png" alt="logo">
        <span class="logo">BloodLink</span>
    </a>
    <div id="nav-p2">
        <a href="funds.php" class="nav-links" id="raiseFunds-page">Raise Funds</a>
        <a href="aboutUs.php" class="nav-links" id="aboutUs-page">About Us</a>
        <a href="aboutUs.php" class="nav-links" id="aboutUs-page">Contact Us</a>
    </div>
    <button class="logout">Logout</button>
    <!-- <label class="donor-options">Profile<select name="donor-options">
        <option value="edit">Edit details</option>
        <option value="logout">Logout</option>
    </select><br></label> -->
    <!-- add a feature to delete his profile -->
</nav>
<main>
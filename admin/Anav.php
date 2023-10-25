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
    <!-- <link rel="stylesheet" href="../nav-footer.css"> -->
    <link rel="stylesheet" href="Asidebar.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="Addfunds.css">

</head>
<style>
* {
    padding: 0;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

nav {
    background-color: #fff;
    padding: 1.5rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
    height: 40px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.logo {
    color: #ae0e28;
    font-size: 2.2rem;
    text-decoration: solid white 2px;
    transition: 300ms;
    font-weight: 650;
    width: 12rem;
}
.logo:hover{
    font-size: 2.3rem;
    transition: 450ms;
}
#nav-p1 {
    display: flex;
    align-items: center;
    margin-left: 4rem;
}
#nav-p1 img {
    margin-right: 1rem;
    height: 4rem;
}

#nav-p2 {
    /* display: flex;
    justify-content: center;
    align-items: center; */
    margin-right: 29rem;
    font-size: 2rem;
}
</style>
<body>
<nav>
    <a id="nav-p1" href="">
        <img src="../imgs/logo-img.png" alt="logo">
        <span class="logo">BloodLink</span>
    </a>
    <div id="nav-p2">
        <h1>Admin Panel</h1>
    </div>
</nav>
<main>
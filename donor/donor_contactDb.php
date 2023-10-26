<?php
$connection = mysqli_connect("localhost", "root", "", "contactus");

if(!$connection){
    die("Database not connected due to ". mysqli_connect_error());
}
// echo "Database connected successfully! <br>";

?>
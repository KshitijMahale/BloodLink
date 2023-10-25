<?php
$con = mysqli_connect("localhost", "root", "", "donations");

if(!$con){
    die("Database not connected due to ". mysqli_connect_error());
}
// echo "Database connected successfully! <br>";

?>
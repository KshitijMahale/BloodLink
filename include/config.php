<?php
$conn = mysqli_connect("localhost", "root", "", "donor");

if(!$conn){
    die("Database not connected due to ". mysqli_connect_error());
}
// echo "Database connected successfully! <br>";

?>
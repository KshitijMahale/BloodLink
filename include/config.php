<?php
$conn = mysqli_connect("localhost", "root", "", "donor");

if(!$conn){
    echo "Database not connected due to ". mysqli_connect_error();
}
// echo "Database connected successfully! <br>";

?>
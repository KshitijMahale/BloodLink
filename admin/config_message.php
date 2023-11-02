<?php
$c = mysqli_connect("localhost", "root", "", "contactus");

if(!$c){
    die("Database not connected due to ". mysqli_connect_error());
}
?>
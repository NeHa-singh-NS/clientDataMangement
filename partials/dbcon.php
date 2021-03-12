<?php

//start the session here
session_start();

// $SITE_URL= "http://localhost/food_delivery_website/";
$servername = "localhost";
$username ="root";
$password ="";
$database = "clients_data";

$conn = mysqli_connect($servername , $username, $password, $database);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
    







?>
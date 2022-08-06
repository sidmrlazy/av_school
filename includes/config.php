<?php
// Production
$servername = "localhost";
$username = "u976956619_av_school";
$database = "u976956619_av_school";
$password = "Darthvader@order66";

// Development
// $servername = "localhost";
// $username = "root";
// $database = "av_school";
// $password = "";

// Validate Connection
$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die("Error 404: " . $connection->connect_error);
}
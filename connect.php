<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$connect = mysqli_connect($servername, $username, $password, $database);

if(!$connect) {
    echo 'Error connect to database';
}

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_app";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die(mysqli_error($connect));
}

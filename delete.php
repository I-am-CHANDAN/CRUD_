<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    //getting id of particular data
    $id = $_GET['deleteid'];

    $sql = "delete from app where Id=$id";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        //Redirect to display page after deleting item
        header('location:display.php');
    } else {
        die(mysqli_error($connect));
    }
}

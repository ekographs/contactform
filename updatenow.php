<?php

require_once "dbconnect.php";

if (isset($_POST['update'])) {
    $id = $_GET['ID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];
    $telephone = $_POST['telephone'];

    $query = "UPDATE contact SET name='" . $name . "',email='" . $email . "',job_title='" . $job_title . "',telephone='" . $telephone . "' WHERE id='" . $id . "'";
    $select = mysqli_query($conn, $query);

    if ($select) {
        header("Location:display.php");
    } else {
        echo 'Kindly check your query';
    }

} else {
    header("Location:display.php");
}

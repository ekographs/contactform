<?php

require_once "dbconnect.php";

if (isset($_GET['Del'])) {

    $id = $_GET['Del'];

    $query = "DELETE FROM contact WHERE id='".$id ."'";
    $select = mysqli_query($conn, $query);

    if ($select) {
        header("Location:display.php");
    } else {
        echo 'Kindly check your query';
    }

} else {
    header("Location:display.php");
}

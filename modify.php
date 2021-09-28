<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "contactfrm";

$conn = mysqli_connect($host, $username, $password, $dbname);
$db = mysqli_select_db($conn, $dbname);

if (isset($_POST['edit_row'])) {
    $row = $_POST['row_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];
    $telephone = $_POST['telephone'];

    mysqli_query($conn, "update contact set name='$name',email='$email',job_title='$job_title',telephone='$telephone' where id='$row'");
    echo "success";
    exit();
}

if (isset($_POST['delete_row'])) {
    $row_no = $_POST['row_id'];
    mysqli_query($conn, "delete from contact where id='$row_no'");
    echo "success";
    exit();
}

if (isset($_POST['insert_row'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];
    $telephone = $_POST['telephone'];
    mysqli_query($conn, "insert into contact values('','$name','$email','$job_title','$telephone')");
    echo mysqli_insert_id($mysqli);
    exit();
}
?>
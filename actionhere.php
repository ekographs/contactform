<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactfrm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$job_title = $_POST['job_title'];
$telephone = $_POST['telephone'];

$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `job_title`, `telephone`)
VALUES ('0', '$name', '$email', '$job_title', '$telephone')";

// if (isset($_POST['edit_row'])) {
//     $id = $_POST['id'];
//     $name = $_POST['new_name'];
//     $email = $_POST['new_email'];    
//     $job_title = $_POST['new_job_title'];
//     $telephone = $_POST['new_telephone'];

//     $sql = "UPDATE `contact` SET `id`,`name`='".$name."',`email`='".$email."',`job_title`='".$job_title."',`telephone`=$telephone WHERE `id` =$id";
//     echo "success";
//     exit();
// }


if ($conn->query($sql) === true) {
    header("Location:display.php");
    // header used to refresch the page.

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

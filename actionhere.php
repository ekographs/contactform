<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactfrm";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
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

if ($conn->query($sql) === true) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
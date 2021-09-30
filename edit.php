<?php

require_once "dbconnect.php";
$id = $_GET['GetID'];
$query = "SELECT * FROM contact WHERE id='" . $id . "'";
$select = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($select)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $job_title = $row['job_title'];
    $telephone = $row['telephone'];
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update List</title>
  </head>
  <body>
     <!-- <center> -->

    <div class="container justify-content-md-center">
      <h1>Update Form</h1>
      <!-- -->
      <form class="row gy-2 gx-3 align-items-center" action="updatenow.php?ID=<?php echo $id ?>" method="POST">
        <div class="col-md-3" >
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" value="<?php echo $name ?>">
        </div>

        <div class="col-md-3" >
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email Address" value="<?php echo $email ?>" >
        </div>

        <div class="col-md-3" >
          <label for="job_title" class="form-label">Job Title</label>
          <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter your Job title" value="<?php echo $job_title ?>" >
        </div>

        <div class="col-md-3" >
          <label for="telephone" class="form-label">Telephone</label>
          <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Enter your Number" value="<?php echo $telephone ?>" >
        </div>

        <div class="col-12">
          <button type="submit" name="update" class="btn btn-outline-success" >Update</button>
          <a class="btn btn-outline-secondary" href="display.php" role="button">Back</a>
        </div>
      </form>
    </div><br>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <!-- <script type="text/javascript" src="emscript.js"></script> -->
      <script src="modifyrecords.js"></script>

      <!-- </center> -->
    </div>
  </body>
</html>

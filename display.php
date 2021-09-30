
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact List</title>
  </head>
  <body>
     <!-- <center> -->

    <div class="container justify-content-md-center">
      <h1>Display user list using HTML and PHP</h1>
      <!-- -->
      <form class="row gy-2 gx-3 align-items-center" action="actionhere.php" method="POST">
        <div class="col-md-3" >
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
        </div>

        <div class="col-md-3" >
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your Email Address" >
        </div>

        <div class="col-md-3" >
          <label for="job_title" class="form-label">Job Title</label>
          <input type="text" class="form-control" name="job_title" id="job_title" required placeholder="Enter your Job title" >
        </div>

        <div class="col-md-3" >
          <label for="telephone" class="form-label">Telephone</label>
          <input type="tel" class="form-control" name="telephone" id="telephone" required placeholder="Enter your Number">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-outline-primary" >Insert Row</button>
        </div>
      </form>
    </div><br>

    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Contact details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="edit_row" action="update.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" name="name" class="form-control" id="newname" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" name="email" class="form-control" id="newemail" >
                        </div>
                        <div class="mb-3">
                            <label for="job_title" class="col-form-label">Job Title:</label>
                            <input type="text" name="job_title" class="form-control" id="newjob_title" >
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="col-form-label">Telephone:</label>
                            <input type="tel" name="telephone" class="form-control" id="newtelephone" >
                        </div>
                        <div class="col-12">
                         <button type="submit" id="edit_row" class="btn btn-outline-success" >Save</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div> -->



    <div class="container">
      <table id="cus_table" class="table table-striped table table-bordered" >
        <thead class="">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Job_Title</th>
            <th scope="col">Telephone</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <tbody>
          <?php

include "dbconnect.php"; // Using database connection file here

$select = mysqli_query($conn, "select * from contact"); // fetch data from database

while ($row = mysqli_fetch_assoc($select)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $job_title = $row['job_title'];
    $telephone = $row['telephone'];

    ?>

              <tr id="row>">
                <td class="table-outline-secondary" id=""><?php echo $row['id']; ?></td>
                <td class="table-outline-secondary" id="name"><?php echo $row['name']; ?></td>
                <td class="table-outline-secondary" id="email"><?php echo $row['email']; ?></td>
                <td class="table-outline-secondary" id="job_title"><?php echo $row['job_title']; ?></td>
                <td class="table-outline-secondary" id="telephone"><?php echo $row['telephone']; ?></td>
                <td class="" ><a class="btn btn-outline-success  col-12" href="edit.php?GetID=<?php echo $id ?>" role="button">Edit </a></td>
                <td class="" ><a class="btn btn-outline-danger col-12" href="delete.php?Del=<?php echo $id?>" role="button">Delete</a></td>

                <td>
                <!-- <input type='button' class="btn btn-outline-dark w-25 " id="edit_button<?php echo $row['id']; ?>" value="edit" onclick="edit_row('<?php echo $row['id']; ?>');"> -->
                <!-- <button type="button" class="btn btn-outline-success w-25" id="edit_button" ?GetID=<?php echo $row['id']; ?> data-bs-toggle="modal" data-bs-target="#exampleModal"  data-bs-whatever="@mdo">Edit</button>
                <input type='button' class="btn btn-outline-danger w-15" id="delete_button<?php echo $row['id']; ?>" value="delete" onclick="delete_row('<?php echo $row['id']; ?>');"> -->
                </td>
              </tr>

          <?php
}
?>
        </tbody>
      </table>

      <?php $conn->close(); // Close connection ?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <!-- <script type="text/javascript" src="emscript.js"></script> -->
      <script src="modifyrecords.js"></script>

      <!-- </center> -->
    </div>
  </body>
</html>

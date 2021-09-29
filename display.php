
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
      <form class="row gy-2 gx-3 align-items-center">
        <div class="col-md-3" >
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="new_name" placeholder="Enter your Name" required>
        </div>

        <div class="col-md-3" >
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="new_email" required placeholder="Enter your EmailAddress" >
        </div>

        <div class="col-md-3" >
          <label for="job_title" class="form-label">Job Title</label>
          <input type="text" class="form-control" id="new_job_title" required placeholder="Enter your Job title" >
        </div>

        <div class="col-md-3" >
          <label for="telephone" class="form-label">Telephone</label>
          <input type="tel" class="form-control" id="new_telephone" required placeholder="Enter your Number">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-outline-primary" onclick="insert_row();">Insert Row</button>
        </div>
      </form>
    </div><br>



    <div class="container">
      <table id="cus_table" class="table table-bordered border-primary" >
        <thead class="table-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Job_Title</th>
            <th scope="col">Telephone</th>
            <th scope="col"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            include "dbconnect.php"; // Using database connection file here

            $select = mysqli_query($conn, "select * from contact"); // fetch data from database

            while ($row = mysqli_fetch_array($select)) {
          ?>
              <tr id="row>">
                <td   class="table-secondary" id="name<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
                <td class="table-secondary" id="email<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                <td class="table-secondary" id="job_title<?php echo $row['id']; ?>"><?php echo $row['job_title']; ?></td>
                <td class="table-secondary" id="telephone<?php echo $row['id']; ?>"><?php echo $row['telephone']; ?></td>
                
                <td>
                <input type='button' class="btn btn-outline-dark w-25 " id="edit_button<?php echo $row['id']; ?>" value="edit" onclick="edit_row('<?php echo $row['id']; ?>');">
                <button type="button" class="btn btn-outline-success 2-25" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                <!-- <input type='button' class="btn btn-outline-success w-25" id="save_button<?php echo $row['id']; ?>" value="save" onclick="save_row('<?php echo $row['id']; ?>');"> -->
                <input type='button' class="btn btn-outline-danger w-25" id="delete_button<?php echo $row['id']; ?>" value="delete" onclick="delete_row('<?php echo $row['id']; ?>');">
                </td>
              </tr>

          <?php
            }
          ?>
        </tbody>  
      </table>

      <?php mysqli_close($conn); // Close connection ?>

        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <!-- <script type="text/javascript" src="emscript.js"></script> -->
      <script src="modifyrecords.js"></script>

      <!-- </center> -->
    </div> 
  </body>
</html>

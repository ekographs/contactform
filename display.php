

<!DOCTYPE html>
<html>
  <head>
    <title>Contact List</title>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="emscript.js"></script>
    <script src="modifyrecords.js"></script>
  </head>
  <body>
    <h1>Display user list using HTML and PHP</h1>

    <table id="cus_table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Job_Title</th>
          <th>Telephone</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
<?php

include "dbconnect.php"; // Using database connection file here

$select = mysqli_query($conn, "select * from contact"); // fetch data from database
?>
<?php
while ($row = mysqli_fetch_array($select)) {
    ?>
  <tr id="row>">
  <td id="name<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
  <td id="email<?php echo $row['id'];?>"><?php echo $row['email'];?></td>
  <td id="job_title<?php echo $row['id'];?>"><?php echo $row['job_title'];?></td>
  <td id="telephone<?php echo $row['id'];?>"><?php echo $row['telephone'];?></td>
  <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['id'];?>" value="edit" onclick="edit_row('<?php echo $row['id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['id'];?>" value="save" onclick="save_row('<?php echo $row['id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
 </tr>
 <tr id="new_row">
 <td><input type="text" id="new_name"></td>
 <td><input type="text" id="new_email"></td>
 <td><input type="text" id="new_job_title"></td>
 <td><input type="text" id="new_telephone"></td>
 <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
<?php
}
?>
</table>
<?php mysqli_close($conn); // Close connection ?>

      </tbody>
    </table>
  </body>
</html>
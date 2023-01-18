<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#name').on('keyup',function(){
        // alert('hi');
        var value=$(this).val().toLowerCase();
        $('#mytable tr').filter(function(){
            $(this).toggle($(this).text().toLocaleLowerCase().
            indexOf(value)>-1);
console.log('#name');
           
           

        });

    });
  });

    </script>


<?php
include_once "config.php";


?>

<div class="container">
<!-- <input type="text" id="name" placeholder="Search.."> -->
  <table class="table mt-5"  id="name">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody  id="mytable">
  <?php
  $sql = "SELECT * FROM `notes`";
  $result = mysqli_query($con, $sql);
  $id = 0;
  while($row = mysqli_fetch_assoc($result)){
    $id = $id + 1;
    echo "<tr>
    <th scope='row'>". $id . "</th>
    <td>". $row['title'] . "</td>
    <td>". $row['description'] . "</td>
    <td>". $row['tstamp'] . "</td>
  
  <td>

   <a class='btn btn-primary' href=\"edit.php?id=$row[id]\" role='button'>edit</a>
   <a class='btn btn-danger' href=\"delete.php?id=$row[id]\" role='button'>Delete</a>
  

    </td>
  </tr>";
} 


  ?>
  </tbody>
</table>
</div>



</body>
</html>


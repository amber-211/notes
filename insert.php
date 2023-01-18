<?php
include_once "config.php";
// ---------insert record in db--------
if(isset($_POST['submit'])) {   
    $title = $_POST['title'];
    $description = $_POST['description'];
  

    // Sql query to be executed
    $sql = "INSERT INTO `notes` ( `title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($con, $sql);
  
     
    if($result){ 
        $insert = true;
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
    } 
  }




  header("Location:index.php");
?>
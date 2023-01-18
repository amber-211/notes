<?php
include_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
// if(isset($_POST['update']))
{
    if (isset( $_POST['idEdit'])){
      // Update the record
        $id = $_POST["idEdit"];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
    
      // Sql query to be executed
      $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`id` = $id";
      $result = mysqli_query($con, $sql);
      if($result){
        $update = true;
    }
    else{
        echo "We could not update the record successfully";
    }
    }}


    // -------another edit-------- 

   
//getting id from url
$id = $_GET['id'];

// selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM notes WHERE id=$id");

while($row = mysqli_fetch_array($result))
{


    $title = $row['title'];
    $description = $row['description'];

}



// -------edit-------
    // if(isset($_GET["id"])){
    //   $id = $_GET["id"];
  
    //   $sql= "SELECT * FROM `notes` where id = $id";
    //   $row= mysqli_fetch_assoc(mysqli_query($con,$sql));}


 

  

?>

<form action="/notepad/insert.php" method="POST">
 <H2 class="my-5 m-5">ADD NOTE</H2>
 <div class="mb-3 my-5 m-5">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>" id="">
   <label for="exampleFormControlInput1" class="form-label">NOTE TITLE</label>
   <input type="text" class="form-control" value="<?php echo $title;?>"  name="title" id="title" placeholder="enter your note title">
 </div>
 <div class="mb-3 m-5">
   <label for="exampleFormControlTextarea1" class="form-labe">NOTE DESCRIPTION</label>
   
   <input class="form-control" value="<?php echo $description;?>"   name="description" id="description" rows="3"></input>
  
   <button type="submit" name="submit" class="btn btn-primary mt-4">update</button>
   <a class="btn btn-success mt-4" href="/notepad/display.php" role="button">display</a>
 </div>
 </form>  



     
 <!-- if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];  -->
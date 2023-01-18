<?php
include_once "config.php";

?>
<!-- INSERT INTO `notes` (`id`, `title`, `description`, `tstamp`) VALUES (NULL, 'my first note', 'this is my first note', '2023-01-16 23:43:32'); -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>notepad</title>
  </head>
  <body>
 
      <form action="/notepad/insert.php" method="POST">
      <H2 class="my-5 m-5">ADD NOTE</H2>
      <div class="mb-3 my-5 m-5">
        <label for="exampleFormControlInput1" class="form-label">NOTE TITLE</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="enter your note title">
      </div>
      <div class="mb-3 m-5">
        <label for="exampleFormControlTextarea1" class="form-label">NOTE DESCRIPTION</label>
        
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>

        <button type="submit" name="submit" class="btn btn-primary mt-4">submit</button>
        <a class="btn btn-success mt-4" href="/notepad/display.php" role="button">display</a>
      </div>
      </form>






   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>UPDATE STUDENT PROFILE</title>

</head>
<body>

<div class="container mt-5">
    <h2>STUDENT UPDATE</h2>
    <form>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">ADD</button>
    </form>
</div>
  
<?php 
   if(isset($_GET['message'])){
     echo "<h6>". $_GET['message']."</h6>";
   }
?>  

</body>
</html>

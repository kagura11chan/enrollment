
<?php include('dbcon.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="blogo.png" type="x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style8.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <title>try1</title>
</head>
<body>
    <!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">Sub Modules</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);"></p>
        
        <a href="../dash.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 11%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Dashboard</a>
        <a href="index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;All students</a>
        <a href="../faculty_app/index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Faculty</a> 
        <a href="../section.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Section</a>
        <a href="../profile.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Profile</a>



        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">REGISTRAR</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">Tracking and Document Request </p>
        <a href="tracking1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"></a>
        <a href="request.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Document Request</a><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <center><form action="logout.php" method="POST"><center>
        <button type="submit">Logout</button>
    </form>
        
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0; width: 1550px;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1550px; font-size: 35px; padding: 15px; margin-left: -35px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold; position: sticky; top: 0;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Students</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">All Students</p>
    </div><br><br>

    
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">ADD STUDENT</button>

    <table class="table table-hover table-boardered table-striped">
        <thead>
            <tr>   
                <th>ID</th>
                <th>First Name </th>
                <th>Last Name</th>
                <th>Age </th>
                <th>Course</th>
                <th>Gender</th>
                <th>Year</th>
                <th>Section</th>
                <th>UPDATE</th>
                <th>DELETE </th>
           </tr>
        </thead>
      <tbody>
        <?php
           $query = "select * from `students`";

           $result = mysqli_query ($connection,$query);

           if(!$result){
            die ("query Failed".mysqli_error());
           }
          else{

            while ($row = mysqli_fetch_assoc($result)){
               ?>
            <tr>
              <td> <?php echo $row ['id']; ?></td>
              <td> <?php echo $row ['first_name']; ?> </td>
              <td> <?php echo $row ['last_name']; ?> </td>
              <td> <?php echo $row ['age']; ?> </td>
              <td> <?php echo $row ['course']; ?> </td>
              <td> <?php echo $row ['Gender']; ?> </td>
              <td> <?php echo $row ['year']; ?> </td>
              <td> <?php echo $row ['section']; ?> </td>
              <td><a href="update.php?id=<?php echo $row ['id']; ?>"class="btn btn-success">Update</a></td>
              <td><a href="delete.php?id=<?php echo $row ['id']; ?>"class="btn btn-danger">Delete</a></td>

          </tr>   

               <?php   
            }
         }
    ?>
   </tbody>
</table>
    <?php 
       if (isset($_GET['message'])) {
        echo "<h6>" . $_GET['message'] . "</h6>";
    }  
    ?>

<?php 
       if (isset($_GET['insert_msg'])) {
        echo "<h6>" . $_GET['insert_msg'] . "</h6>";
    }  
    ?>

<?php 
       if (isset($_GET['update_msg'])) {
        echo "<h6>" . $_GET['update_msg'] . "</h6>";
    }  
    ?>
 

 <?php 
       if (isset($_GET['delete_msg'])) {
        echo "<h6>" . $_GET['delete_msg'] . "</h6>";
    }  
    ?>
    


<form action="insert_data.php" method="post">
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Add student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="form-group">
            <label for="f_name">FirstName:</label>
            <input type="text" class="form-control" name="f_name">
        </div>
        
        <div class="form-group">
            <label for="l_name">Lastname:</label>
            <input type="text" class="form-control" name="l_name">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control"  name="course">
        </div>
         <div class ="form-group">
        <label for="male">Male:</label>
          <input type="radio" id="male" name="Gender" value="male">
           <label for="female">Female:</label>
          <input type="radio" id="female" name="Gender" value="female">
           <label for="other">Other:</label>
          <input type="radio" id="other" name="Gender" value="other">  
          </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" name="add_students" value="ADD">
            </div>
        </div>
    </div>
</div>
 <style>
    #main_title{
    text-align: center;
    background-color: rgb(9, 9, 177);
    color: white;
    padding: 20px;
    letter-spacing: 2px;
    font-weight: 200;
}

.box1 h2{
    float: left;
}

.box1 button{
    float: left;
}

.container{
    margin-top: 50px;
}

h6{
    text-align: center;
    color: red;
}

.back-link {
    font-size: 18px;
    color: #007BFF;
    padding: 5px;
    border-radius: 5px;
    background-color: #eff1f5;        
    float: right;
}

.back-link:hover {
    background-color: #eef0f1;
}
button {
    padding: 10px 20px;
    font-size: 10px;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: white;
}


    
 </style>
    
    
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html> 

</body>
</html>
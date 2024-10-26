<?php include('header.php'); ?>
<?php include('dbcon.php');  ?>


<?php 

if(isset($_GET['id'])) { 

    $id = $_GET ['id'];


    
    $query = "select * from `students` where  `id` = '$id' ";

    $result = mysqli_query ($connection,$query);

    if(!$result){
     die ("query Failed".mysqli_error());
    }
   else{

     $row = mysqli_fetch_assoc ($result);

   }
    


}


?>

<?php 
   
   if(isset($_POST['update_students'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }



      $fname = $_POST ['f_name'];
      $lname = $_POST ['l_name'];
      $age = $_POST ['age'];
      $course = $_POST ['course'];
   
    $query = "update `students` set `first_name` = '$fname', `last_name` =  '$lname', 
    `age` = '$age', `course` = '$course' where `id` = '$idnew'";  


    $result = mysqli_query ($connection,$query);

    if(!$result){
     die ("query Failed".mysqli_error());
    }

    else{
        header('location:index.php?update_msg=You have successfully  updated the data');
    }

   }

   
?>



<form action="update.php?id_new=<?php echo $id;  ?>" method="post">
<div class="form-group">
            <label for="f_name">FirstName:</label>
            <input type="text" class="form-control" name="f_name" value="<?php echo $row['first_name']?>">
        </div>
        <div class="form-group">
            <label for="l_name">Lastname:</label>
            <input type="text" class="form-control" name="l_name"  value="<?php echo $row['last_name']?>">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" name="age"   value="<?php echo $row['age']?>"> 
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control"  name="course"  value="<?php echo $row['course']?>">  
        </div>
        <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">

</form>
<?php include('footer.php'); ?>




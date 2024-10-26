
<?php include('dbcon.php');  ?>
<?php include('header.php'); ?>


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



      $lname = $_POST ['l_name'];
      $year = $_POST ['year'];
      $section = $_POST ['section'];
      $course = $_POST ['course'];
   
    $query = "update `students` set `last_name` = '$lname', `year` =  '$year', 
    `section` = '$section', `course` = '$course' where `id` = '$idnew'";  


    $result = mysqli_query ($connection,$query);

    if(!$result){
     die ("query Failed".mysqli_error());
    }

    else{
        header('location:dash.php?update_msg=You have successfully  updated the data');
    }

   }

   
?>



<form action="update.php?id_new=<?php echo $id;  ?>" method="post">
<div class="form-group">
            <label for="l_name">lastName:</label>
            <input type="text" class="form-control" name="l_name" value="<?php echo $row['last_name']?>">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" name="year"  value="<?php echo $row['year']?>">
        </div>
        <div class="form-group">
            <label for="section">Section:</label>
            <input type="number" class="form-control" name="section"   value="<?php echo $row['section']?>"> 
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control"  name="course"  value="<?php echo $row['course']?>">  
        </div>
        <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include('footer.php'); ?>
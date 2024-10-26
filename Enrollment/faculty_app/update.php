<?php include('header.php'); ?>
<?php include('dbcon.php');  ?>


<?php 

if(isset($_GET['id'])) { 

    $id = $_GET ['id'];


    
    $query = "select * from `faculty` where  `id` = '$id' ";

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
   
   if(isset($_POST['update_faculty'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }



      $Name = $_POST ['Name'];
      $age = $_POST ['Age'];
      $masteral = $_POST ['Masteral'];
      $course = $_POST ['course'];
   
    $query = "update `faculty` set `Name` = '$Name', `Age` =  '$age', 
    `Masteral` = '$masteral', `course` = '$course' where `id` = '$idnew'";  


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
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="Name" value="<?php echo $row['Name']?>">
        </div>
        <div class="form-group">
            <label for="Age">Age:</label>
            <input type="number" class="form-control" name="Age"  value="<?php echo $row['Age']?>">
        </div>
        <div class="form-group">
            <label for="Masteral">Masteral:</label>
            <input type="text" class="form-control" name="Masteral"   value="<?php echo $row['Masteral']?>"> 
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control"  name="course"  value="<?php echo $row['course']?>">  
        </div>
        <input type="submit" class="btn btn-success" name="update_faculty" value="UPDATE">

</form>
<?php include('footer.php'); ?>




<?php
include 'dbcon.php';
if(isset($_POST['add_faculty'])){

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Masteral = $_POST['Masteral'];
    $course = $_POST['course'];


   if($Name == "" || empty($Name)){
    header('location:index.php?message= You need to fill in the Firstname!');
   }

   else{
    $query = "insert into `faculty`(`Name`, `Age`, `Masteral` , `course`) values ('$Name','$Age' , '$Masteral' , '$course')";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }

    else{
        header('location:index.php?insert_msg=You data has been added sucessfully');
    }
   }
}


?>
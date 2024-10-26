<?php
include 'dbcon.php';
if(isset($_POST['add_students'])){

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $gender = $_POST['Gender'];


   if($fname == "" || empty($fname)){
    header('location:index.php?message= You need to fill in the Firstname!');
   }

   else{
    $query = "insert into `students`(`first_name`,`last_name`, `age`, `course` , `Gender`) values ('$fname', '$lname', '$age' , '$course' , '$gender')";
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
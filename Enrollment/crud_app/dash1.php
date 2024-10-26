<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_operation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_students = "SELECT COUNT(*) as total_students FROM students";
$result_students = $conn->query($sql_students);
$total_students = $result_students->fetch_assoc()['total_students'];

$sql_faculty = "SELECT COUNT(*) as total_faculty FROM faculty";
$result_faculty = $conn->query($sql_faculty);
$total_faculty = $result_faculty->fetch_assoc()['total_faculty'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">WALLET AND PAYMENTS</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);">Billing and Wallet</p>
        
        <a href="dash1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 11%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Dashboard</a>
        <a href="index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;All students</a>
        <a href="../faculty_app/index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Faculty</a>
        <a href="faculty_app/index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Section</a>
        <a href="profile.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Profile</a>



    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1510px; font-size: 35px; padding: 15px; margin-left: -35px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold; position: sticky; top: 0;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DASHBOARD OVERVIEW</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Monitoring Data</p>
    </div><br><br>
    
    <div class="dashboard">
        <h1 style="text-align: center;">Dashboard Overview</h1>
        <div class="card">
            <h2>Total Students</h2>
            <p><?php echo $total_students; ?></p>
        </div>
        <div class="card">
            <h2>Total Faculty</h2>
            <p><?php echo $total_faculty; ?></p>
        </div>
    </div>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.dashboard {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card {
    background: #007bff;
    color: white;
    padding: 20px;
    margin: 10px 0;
    border-radius: 5px;
    text-align: center;
}
    </style>

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
   
</body>
</html> 

</body>
</html>
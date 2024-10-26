<?php 
 include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="blogo.png" type="x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels and Sections</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>

<div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">Sub modules</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);"></p>
        
        <a href="dash.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 11%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;Dashboard</a>
        <a href="crud_app/index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><img src="" style="width: 10%; margin-left: -10px; background: none; background-color: rgba(0,0,0,0);">&nbsp;&nbsp;All students</a>
        <a href="faculty_app/index1.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Faculty</a>
        <a href="section.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Section</a>
        <a href="profile.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Profile</a>



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
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1510px; font-size: 35px; padding: 15px; margin-left: -35px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold; position: sticky; top: 0;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tracking Request</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Tracking Request</p>
    </div><br><br>

    
    <style>/* styles.css */
body {
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
}

input[type="text"] {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    box-sizing: border-box;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

button {
    padding: 5px 10px;
    cursor: pointer;
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
    <h1>Levels and Sections</h1>
    <input type="text" id="search" placeholder="Search..." onkeyup="searchTable()">
    <table id="levelsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lastname</th>
                <th>Year</th>
                <th>section</th>
                <th>Course</th>
                <th>Action</th>
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
              <td> <?php echo $row ['last_name']; ?> </td>
              <td> <?php echo $row ['year']; ?> </td>
              <td> <?php echo $row ['section']; ?> </td>
              <td> <?php echo $row ['course']; ?> </td>
              <td><a href="update.php?id=<?php echo $row ['id']; ?>"class="btn btn-success">Update</a></td>
              

          </tr>   

               <?php   
            }
         }
    ?>
            
        </tbody>
    </table>

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


    <script>
        function searchTable() {
            const input = document.getElementById('search');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('levelsTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName('td');
                let found = false;
                for (let j = 0; j < td.length - 1; j++) {
                    if (td[j].textContent.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
                tr[i].style.display = found ? "" : "none";
            }
        }

        function editData(id) {
            // Functionality to edit data
            window.location.href = `edit.php?id=${id}`;
        }
    </script>
</body>
</html>

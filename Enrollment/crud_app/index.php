<?php include('header.php'); ?>
<?php include('dbcon.php');  ?>

       <div class="box">
        <h2>ALL STUDENTS</h2> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">ADD STUDENT</button>

        </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('footer.php'); ?> 

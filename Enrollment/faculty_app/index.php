<?php include('header.php'); ?>
<?php include('dbcon.php');  ?>

       <div class="box">
        <h2>Faculty</h2> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">ADD Faculty</button>

        </div>
    <table class="table table-hover table-boardered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Masteral</th>
                <th>Course</th>
                <th>UPDATE</th>
                <th>DELETE </th>
           </tr>
        </thead>
      <tbody>
        <?php
           $query = "select * from `faculty`";

           $result = mysqli_query ($connection,$query);

           if(!$result){
            die ("query Failed".mysqli_error());
           }
          else{

            while ($row = mysqli_fetch_assoc($result)){
               ?>
            <tr>
              <td> <?php echo $row ['id']; ?></td>
              <td> <?php echo $row ['Name']; ?> </td>
              <td> <?php echo $row ['Age']; ?> </td>
              <td> <?php echo $row ['Masteral']; ?> </td>
              <td> <?php echo $row ['course']; ?> </td>
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
                <h5 class="modal-title" id="modalLabel">Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="Name">
        </div>
        
       
        <div class="form-group">
            <label for="Age">Age:</label>
            <input type="number" class="form-control" name="Age">
        </div>
        <div class="form-group">
            <label for="Masteral">Masteral:</label>
            <input type="text" class="form-control"  name="Masteral">
        </div>

        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control"  name="course">
        </div>
        
        

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" name="add_faculty" value="ADD">
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('footer.php'); ?> 

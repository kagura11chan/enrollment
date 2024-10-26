
<?php include('dbcon.php');  ?>

<!DOCTYPE html>
<html lang="en">
    <head><link rel="icon" href="blogo.png" type="x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <title></title>
    </head>

    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .form-container:hover {
            transform: scale(1.05);
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 80%;
            padding: 20px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>


    <body>










        <div class="form-container">
            <form action="data.php" method="POST">
                <h2><center>Register</center></h2>
                <input type="text" name="f_name" placeholder="Firstname" required>
                <input type="text" name="l_name" placeholder="lastname" required>
                <input type="text" name="age" placeholder="Age" required>
                <input type="text" name="course" placeholder="Course" required>
                <label for="male">Male:</label>
                <input type="radio" id="male" name="Gender" value="male">
                 <label for="female">Female:</label>
                <input type="radio" id="female" name="Gender" value="female">
                 <label for="other">Other:</label>
                <input type="radio" id="other" name="Gender" value="other">  
 
                <div class="modal-footer">
                <input type="submit" class="btn btn-success" name="add_students" value="ADD">
            </div>


            </form>
        </div>










    </body>
    </html>
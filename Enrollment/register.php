<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper" id="signup">
    <h1>Signup</h1>
 

    <?php
    if (isset($errors['user_exist'])) {
      echo '<div class="error-main">
                    <p>' . $errors['user_exist'] . '</p>
                    </div>';
      unset($errors['user_exist']);
    }
    ?>
    <?php

    if (isset($errors['email'])) {

      echo '<div class="error">
                    <p>' . $errors['email'] . '</p>
                    </div>';
      unset($errors['email']);

    }
    ?>
    <?php

    if (isset($errors['name'])) {

      echo ' <div class="error">
                    <p>' . $errors['name'] . '</p>
                </div>';

    }
    ?>
    <?php

    if (isset($errors['password'])) {

      echo '<div class="error">
                    <p>' . $errors['password'] . '</p>
                    </div>';
      unset($errors['password']);

    }
    ?>
    <?php

    if (isset($errors['confirm_password'])) {

      echo '<div class="error">
                    <p>' . $errors['confirm_password'] . '</p>
                    </div>';
      unset($errors['confirm_password']);

    }
    ?>
    <form id="form" method="post" action="user-account.php">
      <div>
        <label for="email-input">
          <span>@</span>
        </label>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div>
        <label for="username-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z" /></svg>
        </label>
        <input type="text" name="name" id="name" placeholder="Name">

      </div>
      <div>
        <label for="password-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z" /></svg>
        </label>
        <input type="password" name="password" id="password" placeholder="Password">

      </div>
      <div>
        <label for="repeat-password-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z" /></svg>
        </label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
      </div>

      <button type="submit" name="signup">Signup</button>
    </form>
    <p>
      Have an account already? <a href="login.php">Login Here</a>
    </p>
  </div>
</body>
</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>
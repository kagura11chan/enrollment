<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="blogo.png" type="x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="validation.js" defer></script>
</head>
<style> 

body{
  min-height: 100vh;
  background-image: url("bcp.jpg");
  background-position: center left 150px  ;
  background-size:cover;
  background-repeat: no-repeat;
  overflow: hidden;
}
.wrapper{
  box-sizing: border-box;
  background-color: var(--base-color);
  height: 100vh;
  width: max(40%, 600px);
  padding: 10px;
  border-radius: 0 20px 20px 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
h1{
  font-size: 3rem;
  font-weight: 900;
  text-transform: uppercase;
}
form{
  width: min(400px, 100%);
  margin-top: 20px;
  margin-bottom: 50px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}
form > div{
  width: 100%;
  display: flex;
  justify-content: center;
}
form label{
  flex-shrink: 0;
  height: 50px;
  width: 50px;
  background-color: var(--accent-color);
  fill: var(--base-color);
  color: var(--base-color);
  border-radius: 10px 0 0 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.5rem;
  font-weight: 500;
}
form input{
  box-sizing: border-box;
  flex-grow: 1;
  min-width: 0;
  height: 50px;
  padding: 1em;
  font: inherit;
  border-radius: 0 10px 10px 0;
  border: 2px solid var(--input-color);
  border-left: none;
  background-color: var(--input-color);
  transition: 150ms ease;
}
form input:hover{
  border-color: var(--accent-color);
}
form input:focus{
  outline: none;
  border-color: var(--text-color);
}
div:has(input:focus) > label{
  background-color: var(--text-color);
}
form input::placeholder{
  color: var(--text-color);
}
form button{
  margin-top: 10px;
  border: none;
  border-radius: 1000px;
  padding: .85em 4em;
  background-color: var(--accent-color);
  color: var(--base-color);
  font: inherit;
  font-weight: 600;
  text-transform: uppercase;
  cursor: pointer;
  transition: 150ms ease;
}
form button:hover{
  background-color: var(--text-color);
}
form button:focus{
  outline: none;
  background-color: var(--text-color);
}
a{
  text-decoration: none;
  color: var(--accent-color);
}
a:hover{
  text-decoration: underline;
}
@media(max-width: 1100px){
  .wrapper{
    width: min(600px, 100%);
    border-radius: 0;
  }
}
.error label{
  background-color: #f06272;
}
.error p, .error-main p{
  color: #f06272;
}
form div.error input{
  border-color: #f06272;
}
#error-message{
  color:#f06272;
}

</style>
<body>

  <div class="wrapper" id="signIn">
  <h1>Login</h1>
    <p id="error-message"></p>
    <?php
    if (isset($errors['login'])) {
      echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
      unset($errors['login']);
    }
    ?>
    <?php
        if (isset($errors['email'])) {
          echo ' <div class="error">
                    <p>' . $errors['email'] . '</p>
                </div>';
        }
        ?>
        <?php
        if (isset($errors['password'])) {
          echo ' <div class="error">
                    <p>' . $errors['password'] . '</p>
                </div>';
        }
        ?>
    <form id="form" method="post" action="user-account.php" class="form-control">
      <div>
        <label for="username-input">
          <span>@</span>
        </label>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div>
        <label for="password-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
        </label>
        <input type="password" name="password" id="password-input" placeholder="Password">
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
      <button type="submit" name="signin">Login</button>
    </form>
    <p>New here? <a href="register.php">Create an Account</a></p>
  </div>
</body>
</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>
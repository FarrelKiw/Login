
<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];


  if (empty($email)){
  
    header("Location: Login.php");  
    exit();
    
  }
  // Ambil domain dari email
  $emailParts = explode('@', $email);
  $domain = $emailParts[1];

  // Cek apakah password sesuai dengan domain email
  if ($password === $domain) {
      $_SESSION['email'] = $email;
      header("Location: form.php");
      exit();
  } else {
      echo "Login gagal! Periksa email dan password.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="css/Log.css" />
    <title>Login</title>

  </head>

  <body>
  <div class="container">
      <div class="forms">
        <div class="form login">
          <span class="title">Login Form</span>
          <form action="" method="post">
            <div class="input-field">
              <input type="text" name = "email" placeholder="Enter your email"  required>
              <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
              <input type="password" name ="password" class="password" placeholder="Enter your password"  required/>
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div>
            <div class="checkbox-text">             
            <div class="input-field button">
              <input type="submit" value="Login" >
            </div>
          </form>
          
        </div>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </body>
    </html>
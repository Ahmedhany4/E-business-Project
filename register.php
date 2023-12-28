<?php
require_once 'admin/controller/config.php';

if(isset($_POST['submit'])){
  $name =  $_POST['name'];
  $email =  $_POST['email'];
  $password =  sha1($_POST['password']);
  $cpassword =  sha1($_POST['cpassword']);
  if($cpassword==$password){
    $select = mysqli_query($con, "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'") ;
    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exist!';
    }else{
        mysqli_query($con, "INSERT INTO `user`(`name`, `email`, `password`) VALUES('$name', '$email', '$password')") ;
        $message[] = 'registered successfully!';
        header('location:login.php');
    }
  }else {
    $message[] = 'password not matched!';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
  <?php
        if(isset($message)){
          foreach($message as $message){
            echo'
              <div class="alert" onclick="remove();" style="font-size: 21px;
              padding: 20px 15px 20px 15px;
              background-color: #bf0443;
              color: white;
              font-weight: bold;
              letter-spacing: 2px;">
                <strong>'.$message.'</strong><span style="font-size: 15px;color: black;margin-left: 15px;cursor: pointer;">X</span>
              </div>';
            }
          }
          ?>
    <form action="" method="post"  class="container form-container">
      <h1>Register</h1>
      <div class="input-box"><input type="text" name="name" placeholder="Your Name" required></div>
      <div class="input-box"><input type="email" name="email" placeholder="Email" required></div>
      <div class="input-box"><input type="password" name="password" placeholder="Password" required></div>
      <div class="input-box"><input type="password" name="cpassword" placeholder="Confirm Password" required></div>
      <button type="submit" name="submit" class="btn">Create Account</button>
      <p style="margin-top: 15px;">Do You Have An Account?<a href="login.php"style="color: green;" > Log In</a></p>
    </form>
  </div>
</body>
<script src="js/script.js"></script>
</html>
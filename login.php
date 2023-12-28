<?php
session_start() ;
require_once 'admin/controller/config.php';

if(isset($_POST['submit'])){
  $email =  $_POST['email'];
  $password =  sha1($_POST['password']);
  $query= "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' ";
  $result = mysqli_query($con,$query) ;
  $count_ROWS=mysqli_num_rows($result) ;
  if($count_ROWS> 0){
    $row = mysqli_fetch_assoc($result);
      if($email == "admin@admin.com" && $password== sha1("ah123")){
        $_SESSION['admin_email'] = $row['email'] ;
        $_SESSION['admin_id'] = $row['id'];
        $_SESSION['admin_name'] = $row['name'];
      }else {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
      }
  }
  else{
      $message[] = 'incorrect password or email!';
  }
}

if (isset($_SESSION['admin_email'])) {
  header('location:admin/index.php');
}
if(isset($_SESSION['user_id'])){
  header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
  <?php
      if(isset($message)){
        foreach($message as $message){
            echo'<div class="alert" onclick="remove()" style="font-size: 19px;
            padding: 20px 15px 20px 15px;
            background-color: #bf0443;
            color: white;
            font-weight: bold;
            letter-spacing: 1px;"><strong>'.$message.'</strong> <span style="font-size: 15px;color: black;margin-left: 15px;cursor: pointer;">X</span></div>';
        }
      }
      ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
      <h1>Login</h1>
      <div class="input-box"><input type="text" name="email" placeholder="Email" required><i class='bx bxs-user'></i></div>
      <div class="input-box"><input type="password" name="password" placeholder="Password" required><i class='bx bxs-lock-alt' ></i></div>
      <button type="submit" name="submit" class="btn">Login</button>
      <div class="register-link"><p>Dont have an account? <a href="register.php">Register</a></p></div>
    </form>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
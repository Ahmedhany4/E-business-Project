<?php 
  session_start() ;
  if (!isset($_SESSION['admin_name'])) {
    header('Location: ../login.php');
  }
require_once 'config.php';
session_start();
if (isset($_POST['submit'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $category=$_POST['category'];
  $image=$_FILES['image'];
  $image_location=$_FILES['image']['tmp_name'];
  $image_name=$_FILES['image']['name'];
  $image_up ="../img/" . $image_name ;
  $user_id= 0;
if (isset($_SESSION['admin_name'])){
  $user_id =$_SESSION['admin_id'] ;
}else {
  $user_id =$_SESSION['user_id'] ;
}
  $insert="INSERT INTO products (`name`,`price`,`image`,`category` ,`user_id`)  
  VALUES (\"$name\",$price,\"$image_up\",\"$category\" ,$user_id )";

  mysqli_query($con,$insert);

  if (move_uploaded_file($image_location,$image_up)){
    echo "<script>alert('Done!') </script>";
  }
  else {
    echo "<script>alert('Error!!') </script>";
  }
  header('location: ../');
}

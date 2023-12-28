<?php 
  session_start() ;
  if (!isset($_SESSION['admin_name'])) {
    header('Location: ../login.php');
  }
require_once 'config.php';
$id = $_GET['id'];
$delete="DELETE FROM `products` WHERE `id`= '$id' ";
  mysqli_query($con,$delete);
  header('location: ../pages/products.php');
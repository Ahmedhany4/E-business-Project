<?php 
  session_start() ;
  if (!isset($_SESSION['user_name']) ) {
    if(!isset($_SESSION['admin_name'])){
      header('Location: login.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/products.css">
    <title>Watch gallery </title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../imgs/rolex-logo.svg" class="logo" alt="logo">
            
        </div>
        <ul>
          <li> <a href="../../index.php">Home</a></li>
          <li> <a href="">Products</a></li>
          <li> <a href="payment.php">Payment</a></li>
          <li> <a href="../../logout.php">Log out</a></li>
          <li> <a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
        </ul>
    </nav> 
    <p class="clear"></p>
    <div class="container">
    <?php 
    require_once "../../admin/controller/config.php" ;
    $sql = "SELECT * FROM products";
    $data= mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($data)){
      $image = explode('/',$row['image']);
      echo "
          <div class='box'>
            <img src='../../admin/img/$image[2]' alt='product'>
              <h2 >$row[name]</h2>
              <p >$$row[category]</p>
              <span >$$row[price]</span>
              <div class='rate'>
              <i class='filled fas fa-star'></i>
              <i class='filled fas fa-star'></i>
              <i class='filled fas fa-star'></i>
              <i class='filled fas fa-star'></i>
              <i class='fa-regular fa-star'></i>
          </div>
              <div class='options'>
                <a href='product.php? id=$row[id]'>Buy It Now</a>
              </div>
          </div>";
    }
  ?>
    </div>
    <footer> 
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                  <li> <a href="../../index.php">Home</a></li>
                  <li> <a href="">Products</a></li>
                  <li> <a href="payment.php">Payment</a></li>
                  <li> <a href="../../logout.php">Log out</a></li>
                  <li> <a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
                </ul>
            </div>
            div <div class="footerBottom">
                <p> Copywrite &copy;2023; Designed by <span class="designer"> Our team</span></p>
            </div>
        </div>
        
        </footer>
</body>
</html>

<?php 
  session_start() ;
  if (!isset($_SESSION['user_name']) ) {
    if(!isset($_SESSION['admin_name'])){
    header('Location: login.php');
    }
}
  require_once "../../admin/controller/config.php" ;
  $id= $_GET['id'] ;
  $sql = "SELECT * FROM products WHERE `id` = $id";
  $data= mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($data);
  $image = explode('/',$row['image']);
  // print_r($row) ;
  // echo"<br>";
  // echo $image[2];die;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$row['name'] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/product1.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="../imgs/rolex-logo.svg" class="logo">
                
            </div>
            <ul>
                <li><a href="../../"> Home</a></li>
                <li><a href="products.php"> Products</a></li>
                <li><a href="#"> About Us</a></li>
                <li><a href="../../logout.php">Log out</a></li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
            </ul>
        </nav> <br><br>
        <p class="clear"></p>
        <div class="container">
            <div class="prod" >
            <img src="<?= '../../admin/img/'.$image[2]?>" alt='product' width="100" class="pro">
            </div>
            <div class="details">
                <h1><?=$row['name'] ?></h1>
                <h2>Price<span class="s1"> : <?=$row['price'] ?></span><span>$</span></h2>
                <input type="number" value="1">
                <h2>Details</h2>
                <h4><?=$row['category'] ?> </h4>
                <a href="payment.php" class="button">BUY</a>
            </div>
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
                    <li><a href="../../"> Home</a></li>
                    <li><a href="products.php"> Products</a></li>
                    <li><a href="#"> About Us</a></li>
                    <li><a href="../../logout.php">Log out</a></li>
                    <li><a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
                  </ul>
                </div>
                div <div class="footerBottom">
                    <p> Copywrite &copy;2023; Designed by <span class="designer"> Our team</span></p>
                </div>
            </div>
            
            </footer>
            
    </body>
</html>
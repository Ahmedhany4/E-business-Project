<?php 

session_start() ;
if (!isset($_SESSION['user_name']) ) {
    if(!isset($_SESSION['admin_name'])){
    header('Location: login.php');
    }
}
    require_once "../../admin/controller/config.php" ;
    if (isset($_POST['submit'])){
        $name = $_POST['name'] ;
        $user_id =$_SESSION['user_id']  or 0;
        $email = $_POST['email'] ;
        $address = $_POST['address'] ;
        $country = $_POST['country'] ;
        $city = $_POST['city'] ;
        $name_card = $_POST['name_card'] ;
        $number_card = $_POST['number_card'] ;
        $exp_card = $_POST['exp_card'] ;
        $cvv = $_POST['cvv'] ;

$query ="INSERT INTO `payment`( `user_id`, `name`, `email`, `address`, `country`, `city`, `name_card`, `number_card`, `exp_card`, `cvv`)
    VALUES ($user_id,'$name' ,'$email' ,'$address','$country','$city','$name_card','$number_card', '$exp_card',$cvv)";
    mysqli_query($con,$query);
    header("locaion: success.php");
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/pay.css"> 

</head>
<body>
<nav>
    <div class="logo"><a href="../../index.php"><img src="../images/rolex-logo.svg" class="logo" alt="logo"></a></div>
    <ul>
        <li> <a href="../../index.php">Home</a></li>
        <li> <a href="products.php">Products</a></li>
        <li> <a href="#">Payment</a></li>
        <li> <a href="../../logout.php">Log out</a></li>
        <li> <a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
    </ul>
</nav> 

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">your data</h3>

                <div class="inputBox">
                    <span>full name</span>
                    <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>email</span>
                    <input type="email" placeholder="Email"  name="email" required>
                </div>
                <div class="inputBox">
                    <span>adress</span>
                    <input type="text" placeholder="locality"  name="address" required>
                </div>
                <div class="inputBox">
                    <span>Country</span>
                    <input type="text" placeholder="Egypt"  name="country" required>
                </div> 
                <div class="flex">
                <div class="inputBox">
                    <span>city</span>
                    <input type="text" placeholder="Cairo"  name="city" required>
                </div>
                <div class="inputBox">
                    <span>zip code </span>
                    <input type="text" placeholder="(optional)"  name="name" >
                </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">PAYMENT</h3>
                <div class="inputBox">
                    <span>cards accepted</span>
                    <img src="../images/image.jpeg" class="one">
                </div>
                <div class="inputBox">
                    <span> name card</span>
                    <input type="text" placeholder="Name"  name="name_card" required>
                </div>
                <div class="inputBox">
                    <span>card number</span>
                    <input type="number" placeholder="1111-2222-3333-4444"  name="number_card" required>
                </div>
                <div class="inputBox">
                    <span>exp Card</span>
                    <input type="text" placeholder="MM / YY"  name="exp_card" required>
                </div> 
                <div class="flex">
                <div class="inputBox">
                    <span> CVV </span>
                    <input type="text" placeholder="0123"  name="cvv" required>
                </div>
                </div>
            </div>
        </div> <br>
        <button  type="submit" name="submit" class="submit-btn" >proceed to checkout</button> 
        </form>
    </div>

<footer> 
<div class="footerContainer">
<div class="socialIcons">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-google"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
</div>
<div class="footerNav">
    <ul>
        <li> <a href="../../index.php">Home</a></li>
        <li> <a href="../../index.php">Products</a></li>
        <li> <a href="#">Payment</a></li>
        <li> <a href="../../logout.php">Log out</a></li>
        <li> <a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
    </ul>
</div>
div <div class="footerBottom">
<p> Copywrite &copy;2023 | Designed by <span class="designer"> Our team</span></p>
</div>
</div>

</footer>

</body>
</html>
<?php 
  session_start() ;
  if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/home.css">

</head>
<body>
  <nav>
    <div class="logo">
        <img src="img/images/rolex-logo.svg" class="logo" alt="logo">
        
    </div>
    <ul>
        <li><a href="#"> Home</a></li>
        <li><a href="user/pages/products.php"> Products</a></li>
        <li><a href="#"> About Us</a></li>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="https://mail.google.com/mail/u/0/#inbox">Contact US</a></li>
    </ul>
</nav> <br>

    <div class="container1" >
    <img src="img/images/watch-9.png" width="100%" height="483px" alt="image" style="object-fit: cover;">
        <div class="centered">
            <h3>ROLEX</h3>
            <p><b>A watch for the dates to remember</b></p>    
        </div>
    </div>

    <div class="container2"> 
    <img src="img/images/members.png" width="100%" height="200px" alt="image" style="object-fit: cover;">
    <div class="zezo">
        <figure>
            <p><h3>M.Abdelaziz</h3> product detail pages<br>login<br>rigester.</p>
        </figure>
    </div>
    <div class="adel">
        <figure>
            <p> <h3>Adel Elsawy</h3>products page <br>part of final page<br>final page.</p>
        </figure>
    </div>
    <div class="hany">
        <figure>
            <p><h3>A.Hany</h3>Back End of project.</p>
        </figure>
    </div>
    <div class="hassan">
        <figure>
            <P> <h3>M.hassan</h3>payment page<br> part of page home<br> header & footer of all pages.</P>
        </figure>
        </div>
        <div class="one">
            <a href="user/pages/products.php"> products</a>
        </div>
<br>
<footer> 
  <div class="footerContainer">
      <div class="socialIcons">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
          <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="footerNav">
          <ul>
              <li><a href="#"> Home</a></li>
              <li><a href="user/pages/products.php"> Products</a></li>
              <li><a href="#"> About Us</a></li>
              <li><a href="logout.php">Log Out</a></li>
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

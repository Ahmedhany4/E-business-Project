<?php 
  session_start() ;
  if (!isset($_SESSION['admin_name'])) {
    header('Location: ../login.php');
  }
	$user_name= "";
	if (isset($_SESSION['admin_name'])){
		$user_name =$_SESSION['admin_name'] ;
	}else {
		$user_name =$_SESSION['user_name'] ;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <title>Admin</title>
</head>
<body>

	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="pages/products.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Products</span>
				</a>
				<a href="../user/pages/products.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products Page</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu" style="margin-top: 30px;">
			<li>
				<a href="../logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="profile"><?=$user_name; ?>
				<img src="img/people.png" alt="image-profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>0</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$ <span id="total-sale">0</span></h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>

      <form id="contact" action="controller/insert.php" method="post"  class="form" enctype="multipart/form-data">
          <h3>Add Product</h3>
            <input placeholder="Name Of Product" type="text" name="name" required autofocus>
            <input placeholder="Description" type="text" name="category" required>
            <input placeholder="Price" type="text" name="price" required>
            <label for="image">image:</label>
            <input placeholder="image" type="file" name="image" id="image" required>
            <button name="submit" type="submit" id="contact-submit" >Submit</button>
        </form>
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
  <script src="js/script.js"></script>
</body>
</html>
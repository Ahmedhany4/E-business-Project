
<?php 
  session_start() ;
  if (!isset($_SESSION['admin_name'])) {
    header('Location: ../../login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
  <title>Update Product </title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
  input {
    width: 317px;
  }
</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Products</span>
				</a>
			</li>


		</ul>
		<ul class="side-menu">
			<li>
				<a href="../../logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="profile">
				<img src="../img/people.png" alt="image">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Update Product</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Product</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">update</a>
						</li>
					</ul>
				</div>
			</div>
      

  <?php
  require_once 'config.php';
  $id = $_GET['id'];
  $query = "SELECT * FROM products WHERE id = '$id'";
  $result = mysqli_query($con, $query);
  $data = mysqli_fetch_array($result);
  ?>
  <form id="contact" action="updateRequest.php" method="post"  class="form" enctype="multipart/form-data">
            <H2 style="margin-bottom: 8px;"> Update Product</H2>
            <input type="text" name="id" placeholder="id "value="<?= $data['id']?>" readonly><br>
            <input type="text" name="name" placeholder="Name Of Product" value="<?= $data['name']?>"><br>
            <input type="text" name="price" placeholder="Price" value="<?= $data['price']?>"> <br>
            <input type="text" name="category" placeholder="Category" value="<?= $data['category']?>"> <br>
            <label for="file" style="
    cursor: pointer;
    display: block;
    width: 100%;
    padding: 8px 0px;
    background-color: #3C91E6;
    text-align: center;
    color: white;
    font-size: 15px;
    margin-bottom: 8px;">Update Product Image</label>
            <input type="file" id="file" name="image" style="display:none;" >
            <button name="update" type='submit'>Update</button>
            <br><br>
            <a href="../pages/products.php" style="
    background-color: #2196F3;
    padding: 10px 45px;
    color: white;
    border-radius: 5px;
">Back</a>
        </form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="../js/script.js"></script>
</body>
</html>
<?php 
  session_start() ;
  if (!isset($_SESSION['admin_name'])) {
    header('Location: ../../login.php');
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

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/style.css">

	<title>Products</title>
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
			<a href="#" class="profile"><?= $user_name;?>
				<img src="../img/people.png" alt="image">
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
							<a class="active" href="#">Products</a>
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


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3> Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Img</th>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Updata</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

<?php 
  require_once '../controller/config.php';

  $sql = "SELECT * FROM products";

  $data= mysqli_query($con,$sql);
  $i=1;
  while ($row = mysqli_fetch_assoc($data)){
    echo "
		<tr>
					<td><span >$i</span></td>
					<td><img src='$row[image]' alt='image'></td>
					<td><p>$row[name]</p></td>
					<td><p>$row[category]</p></td>
					<td><p>$ $row[price] </p></td>
					<td><a href='../controller/update.php? id=$row[id]' class='custom-btn btn-3'><span>Update</span></a></td>
					<td><a href='../controller/delete.php? id=$row[id]' class='custom-btn btn-3 delete'><span>Delete</span></a></td>
						
		</tr>
";
$i++;
  }
	
  ?>
						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../js/script.js"></script>
</body>
</html>
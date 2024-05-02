<?php
	session_start();
	require 'db.php';
	
	function dataFilter($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_GET['search']) && !empty($_GET['search'])) {
		$search = dataFilter($_GET['search']);
		$sql = "SELECT * FROM fproduct WHERE product LIKE '%$search%'";
	} else {
		$sql = "SELECT * FROM fproduct WHERE 1";
	}

	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgriMarket</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	
	
	
<style>
.row.align-center {
    width: 35%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    padding-top: 100px;
}
section.product_section.another-product {
    background-image: url(images/b6.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding-top: 100px;
    padding-bottom: 120px;
}	
</style>
	
	
	
	
	
	
	</head>
	<?php require 'menu.php'; ?>
	<div class="product_list_content" style="background-image: url('images/b6.png');background-size:cover;background-position: center;background-repeat: no-repeat;">
	<section id="main" class="wrapper style1 align-center change_bg">
		<div class="container">
			<h2>Welcome to digital market</h2>

			<form method="GET" action="productMenu.php">
				<input type="text" name="search" placeholder="Search products...">
				<input type="submit" value="Search">
			</form>

			<section id="two" class="wrapper style2 align-center">
				<div class="container">
					<div class="row">
						<?php while($row = $result->fetch_array()): ?>
							<div class="col-md-4">
								<section>
									<strong><h2 class="title" style="color:black; "><?php echo $row['product'];?></h2></strong>
									<a href="review.php?pid=<?php echo $row['pid'];?>"><img class="image fit" src="images/productImages/<?php echo $row['pimage'];?>" height="220px;" /></a>
									<div style="align: left">
										<?php echo "Type : ".$row['pcat'];?>
										<?php echo "Price : ".$row['price']." /-";?>
									</div>
								</section>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>
	<body>

<!-- <section class="product_section another-product">
<div class="container text-center">
  <div class="row align-center">
		<a href="productMenu.php?n=1" name="catSearch"><img src="images/search_product.png"></a><br><br>
		<p class="p_text">Search according to your needs</p>
  </div>
</div>
</section> -->

		<!-- One -->
			<!-- <section id="one" class="wrapper style1 align-center" style="height: 600px">
				<div class="container">
					<h2>Welcome to Digital Market</h2>
					<br /><br />
					<div class="row 200%">
						<section class="4u 12u$(small) width_100%">
							<a href="profileView.php"><img src="profileDefault.png"></a>
							<p>Your Profile</p>
						</section>
						<section class="4u 12u$(small) width_100%">
							<a href="productMenu.php?n=1" name="catSearch"><img src="search.png"></a>
							<p>Search according to your needs</p>
						</section>
						<!-- <section class="4u$ 12u$(small)">
							<a href="productmenu.php?n=0"><img src="product.png"></a>
							<p>Our products</p>
						</section> -->
					</div>
				</div>
			</section> 



		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font-size: 35px calibri;color:#f99494; ">About Us</h1>
		</center>
		<hr style="border: 1px solid #F99494;">
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">AgriMarket &copy; </h3>
		<!--<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white;">Your product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">Agri Market Fam<span>Dhaka</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<a href="callto:+8801700000000"><p style="font-size:20px">+8801700000000</p></a>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:agrimarket@gmail.com" style="color:white">agrimarket@gmail.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px;"><b style="color:#fff;">About AgriMarket</b></span>
				AgriMarket is an e-commerce trading platform for grains & grocerries...
			</p>
			<div class="footer-icons">
				<a  href="https://github.com"><i style="margin-left: 0;margin-top:5px;"class="fa fa-github"></i></a>
				<a href="https://instagram.com"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>
		<div class="copyRight-area">
            <p>© 2024 Copyright by agrimarket.</p>
        </div>

	</footer>




	</body>
</html>

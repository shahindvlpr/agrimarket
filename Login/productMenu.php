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
.p_style {
    padding-bottom: 30px;
}
.image.fit {
    display: block;
    margin: 0 0 2em 0;
    width: 90%;
    border-radius: 0;
    margin: 0 auto;
    height: 310px;
    margin-bottom: 30px;
}
.col-md-4>section {
    border: 4px solid #44c90d !important;
    margin-bottom: 30px;
    border-radius: 8px;
    background-color: #ffffff26 !important;
}
input[type="text"] {
    margin-bottom: 30px;
}
.padmar0 {
    padding-top: 15px;
}
</style>

</head>
<body>

<?php
	require 'menu.php';
?>

<div class="product_list_content" style="background-image: url('images/b6.png');background-size:cover;background-position: center;background-repeat: no-repeat;">
	<section id="main" class="wrapper style1 align-center change_bg">
		<div class="container">
			<h2>Welcome to digital market</h2>

			<form method="GET" action="productMenu.php">
				<input type="text" name="search" placeholder="Search products...">
				<input type="submit" value="Search">
			</form>

			<section id="two" class="wrapper style2 align-center padmar0">
				<div class="container">
					<div class="row">
						<?php while($row = $result->fetch_array()): ?>
							<div class="col-md-4">
								<section>
									<strong><h2 class="title" style="color:black; "><?php echo $row['product'];?></h2></strong>
									<a href="review.php?pid=<?php echo $row['pid'];?>"><img class="image fit" src="images/productImages/<?php echo $row['pimage'];?>" height="220px;" /></a>
									<div class="p_style
									" style="align: left">
										<?php echo "Type : ".$row['pcat'];?><br>
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
</body>
</html>

<?php
	session_start();
	require 'db.php';
	$pid = $_GET['pid'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>AgriMarket: Product</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>GoldCrops</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>



<style>
	.signuparea {
    width: 80%;
    margin: 0 auto;
}
.sub-container {
    margin-left: 270px;
	color: #000;
	margin-bottom: 30px;
	padding: 20px;
}
.sub-container h3 {
    color: #000 !important;
    float: left;
    font-size: 35px;
    margin-bottom: 0;
    font-weight: 500;
}
.col-sm-4.picdesign img {
    height: 320px;
    border: 5px solid #FBBD05;
    border-radius: 8px;
}

</style>






</head>
<body>


				<?php
					require 'menu.php';

					$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$fid = $row['fid'];
					$sql = "SELECT * FROM farmer WHERE fid = '$fid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$row['pimage'];

					?>
				<section id="main" class="wrapper style1 align-center"style="background-image: url('images/b6.png');background-size:cover;background-position: center;background-repeat: no-repeat;">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 picdesign">
									<img class="image fit" src="<?php echo $picDestination.'';?>" alt="" />
								</div>
								<!-- Image of farmer-->
								<div class="col-12 col-sm-6">
									<p style="font: 50px Times new roman;"><?= $row['product']; ?></p>
									<p style="font: 30px Times new roman;">Product Owner : <?= $frow['fname']; ?></p>
									<p style="font: 30px Times new roman;">Price : <?= $row['price'].' /-'; ?></p>
								</div>
							</div><br />
							<div class="row">
								<div class="col-12 col-sm-12" style="font: 25px Times new roman;">
									<?= $row['pinfo']; ?>
								</div>
							</div>
						</div>

						<br /><br />

						<div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div class="6u 12u$(large)">
                                        <a href="myCart.php?flag=1&pid=<?= $pid; ?>" class="btn btn-primary" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart"> AddToCart</a>
                                    </div>
                                    <div class="6u 12u$(large)">
                                        <a href="buyNow.php?pid=<?= $pid; ?>" class="btn btn-primary" style="text-decoration: none;">Buy Now</a>
										
										<!-- <a href="login.php>" class="btn btn-primary" style="text-decoration: none;">Registration</a> -->
										<!-- <button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">Buy Now</button> -->


										<center>
											<div class="row uniform unique">
												<div class="6u 12u$(xsmall)">
													<button class="btn btn-primary" onclick="document.getElementById('id02').style.display='block'" style="width:auto">Submit</button>
												</div>
											</div>
										</center>
										
                                    </div>
                                </div>
                            </center>
                        </div>

					<div class="container">
						<h1>Product Reviews</h1>
					<div class="row">
						<?php
							$sql = "SELECT * FROM review WHERE pid='$pid'";
							$result = mysqli_query($conn, $sql);
						?>
						<div class="col-0 col-sm-3"></div>
						<div class="col-12 col-sm-6">
							<?php
								if($result) :
									while($row1 = $result->fetch_array()) :
							?>
							<div class="con">
								<div class="row">
									<div class="col-sm-4">
										<em style="color: black;"><?= $row1['comment']; ?></em>
									</div>
									<div class="col-sm-4">
										<em style="color: black;"><?php echo "Rating : ".$row1['rating'].' out of 10';?></em>
									</div>
								</div>
								<span class="time-right" style="color: black;"><?php echo "From: ".$row1['name']; ?></span>
								<br /><br />
							</div>
						<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			<?php

			?>
			<div class="container">
				<p style="font: 20px Times new roman; align: left;">Rate this product</p>
				<form method="POST" action="reviewInput.php?pid=<?= $pid; ?>">
					<div class="row">
						<div class="col-sm-7">
							<textarea style="background-color:white;color: black;" cols="5" name="comment" placeholder="Write a review"></textarea>
						</div>
						<div class="col-sm-5">
							<br />
							Rating: <input type="number" min="0" max="10" name="rating" value="0"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<br />
							<input type="submit" />
						</div>
					</div>
				</form>
			</div>



<div id="id02" class="modal signuparea">

<form class="modal-content animate" action="signUp.php" method='POST'>
  <div class="imgcontainer">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container">

<section>
	<div class="sub-container">
	<h3 class="signup" style="color: #000 !important;">SignUp</h3>
	<form method="post" action="signUp.php">
		<center class= "registration-info">
		<div class="row uniform sign-up">
			<div class="3u 12u$(xsmall)">
				<input type="text" name="name" id="name" value="" placeholder="Name" required/>
			</div>
			<div class="3u 12u$(xsmall)">
				<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
			</div>
		</div>
		<div class="row uniform sign-up">
			<div class="3u 12u$(xsmall)">
				<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
			</div>

			<div class="3u 12u$(xsmall)">
				<input type="email" name="email" id="email" value="" placeholder="Email" required/>
			</div>
		</div>
		<div class="row uniform sign-up">
			<div class="3u 12u$(xsmall)">
				<input type="password" name="password" id="password" value="" placeholder="Password" required/>
			</div>
			<div class="3u 12u$(xsmall)">
				<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			</div>
		</div>
		<div class="row uniform signup-add">
			<div class="6u 12u$(xsmall)">
				<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
			</div>
		</div>
		<!-- <div class="row uniform">
			<p>
				<b>Category : </b>
			</p>
			<div class="3u 12u$(small)">
				<input type="radio" id="farmer" name="category" value="1" >
				<label for="farmer">Farmer</label>
			</div>
			<div class="3u 12u$(small)">
				<input type="radio" id="buyer" name="category" value="0" checked>
				<label for="buyer">Buyer</label>
			</div>
		</div> -->

		<div class="row uniform sign-up">
			<p class="categoryp signup">
				<b>Category</b>
			</p>
			<div class="3u 12u$(small) flexitem">
			<div class="input-group">
				<select class="custom-select" id="inputGroupSelect04" >
					<option selected>choose</option>
					<option  id="farmer" name="category" value="1">Farmer</option>
					<option id="buyer" name="category" value="0">Buyer</option>
				</select>
				<!-- <div class="input-group-append btn">
					<button class="btn btn-outline-secondary" type="button">Button</button>
				</div> -->
				</div>
			</div>
		</div>



			<div class="row uniform sign-up">
				<div class="3u 12u$(small) signup-btn">
					<a href="buyNow.php?pid=<?= $pid; ?>">
						<input class="btn btn-primary" style="text-decoration: none;" type="submit" value="Submit" name="submit" class="special" />
					</a>
					<!-- <a href="buyNow.php?pid=<?= $pid; ?>" class="btn btn-primary" style="text-decoration: none;">Buy Now</a> -->
				</div>
				<div class="3u 12u$(small) signup-btn">
					<input type="reset" value="Reset" name="reset"/>
				</div>
			</div>
		</center>
	</form>
	</div>
	</section>
  </div>
  </form>
  </div>
</body>
</html>


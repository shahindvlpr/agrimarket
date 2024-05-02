<?php session_start()?>

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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />

<style>
	.copyRight-area {
		margin-top: 50px;
		background: #000;
		text-align: center;
		color: #fff;
		margin-bottom: 0;
		padding-bottom: 0;
	}

	.copyRight-area p {
		margin-bottom: 0;
		padding-bottom: 0;
	}
	footer#aboutUs {
		padding-bottom: 20px;
	}
	
</style>
<style>
section.product_section img {
	width: 70px;
}
section.product_section {
	background-image: url('images/banner_pic.png');
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	color: #ffffff;
	text-align: center;
}
.white {
	color: #fff !important;
}
.product_section:hover .row .col-md-4 {
    background: gray;
    opacity: .7;
    border-radius: 10px;
    padding: 20px;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
	border-bottom: 5px solid #3BA666;
    transition: 1s all;
}
section.background_img {
    background-image: url(images/banner_pic.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -99;
    position: relative;
    border-top: 11px solid #000000;
}
.wrapper.style1{
	background-image: url(images/banner_pic.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -99;
    position: relative;
    border-top: 11px solid #000000;
}
</style>
<style>
/* farmer section */

.funders-section {
    font-family: Poppins;
    padding-top: 140px;
    padding-bottom: 100px;
	position: relative;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.funders-section .funders-section-title {
    color: #fff;
    font-size: 52px;
    font-style: normal;
    font-weight: 500;
    line-height: 68px;
    max-width: 590px;
    margin-bottom: 20px;
}
.funders-section .funders-section-desc {
    color: #fff;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 32px;
    max-width: 590px;
    margin-bottom: 28px;
    font-family: verdana;
	text-align: justify;
}
.learn-more-btn {
    padding: 10px 20px;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    border: 1px solid #102ae7;
    color: #ffffff;
    font-family: Poppins;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 40px;
    transition: transform 0.3s ease;
}
a.learn-more-btn:hover {
    text-decoration: none;
    background: #000;
    color: #fff;
    transition: 1s all;
    opacity: .5;
}
.funders-section .funders-section-img-right {
    display: block;
    max-height: 580px;
    width: 100%;
    padding-right: 20px;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
.funders-section::before {
    position: absolute;
    content: "";
    /* background: #000; */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: .7;
    z-index: -1;
    background-image: url(images/b5.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.funders-section-desc {
    color: #fff;
}

.col-md-4>section {
    border: 8px solid white;
    margin-bottom: 20px;
    border-radius: 8px;
    background-color: #000;
}

.col-md-4>section>strong h2 {
    color: #fff !important;
}

.wrapper.style1{
	background-image: url('images/banner_pic.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -99;
    position: relative;
    border-top: 0;
}
section#main.change_bg {
	background-image: url(images/b6.png);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
} */
.wrapper .style1 .align-center .change_bg,
.wrapper.style1 {
	background-color: blue;
	background-image: url('images/b6.png');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
.sub-container h3 {
    color: #000 !important;
    float: left;
    font-size: 35px;
    margin-bottom: 0;
    font-weight: 500;
}
</style>
</head>

	<?php
		require 'menu.php';
	?>
<!-- image-filtering-section-start -->

<?php
 	// // session_start();
	// if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	// {
	// 	$_SESSION['message'] = "You need to first login to access this page !!!";
	// 	header("Location: Login/error.php");
	// }

 ?>
<section class="product_section">
<div class="container text-center">
  <div class="row">
    <div class="col-md-8">
		<div class="welcome_text">
			<h1 class="white">
				<a style="color: #fff; font-size: 40px;" href="#" class="typewrite" data-period="2000" data-type='[ "Hello sir/ma&apos;am", "Welcome To Our E-Commerce Platform"]'>
				<span class="wrap"></span>
				</a>
			</h1>
			<h2 class="white">AgriMarket</h2>
			<p>Your Product Our Market</p>
		</div>
	</div>
    <div class="col-md-4">
		<a href="productMenu.php?n=1" name="catSearch"><img src="images/search_product.png"></a>
		<p class="p_text">Search according to your needs</p>
	</div>
  </div>
</div>
</section>

<!-- image-filtering-section-end -->
		<!-- Banner -->
			<!-- <section id="banner" class="wrapper banner-overlay">
				<div class="banner-container">
				<div class="container">
				<h1>
					<a style="color: #fff; font-size: 50px;" href="#" class="typewrite" data-period="2000" data-type='[ "Hello sir/ma&apos;am", "Welcome To Our E-Commerce Platform"]'>
					<span class="wrap"></span>
				</a>
				</h1>
				<h2>AgriMarket</h2>
				<p>Your Product Our Market</p>
				<br><br>
				<section id="banner" class="wrapper banner-overlay">
				<div class="banner-container">
				<div class="container">
				<h1>
					<a style="color: #fff; font-size: 50px;" href="#" class="typewrite" data-period="2000" data-type='[ "Hello sir/ma&apos;am", "Welcome To Our E-Commerce Platform"]'>
					<span class="wrap"></span>
				</a>
				</h1>
				<h2>AgriMarket</h2>
				<p>Your Product Our Market</p>
				<br><br>
				<center>
					<div class="row uniform unique">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
						</div>
					</div>
				</center>
				</div>
				</div>

			</section> 
				</div>
				</div>

			</section>-->


<!-- farmer-section -->

<div class="funders-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 order-lg-first fund-first" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
        <div class="funders-section-title">
          <p>Improving Access to Market for the Farmers</p>
        </div>
        <div class="funders-section-desc">
          <p>We enable individuals and institutions to fund the capital requirement of the farmers. iFarmer bundles finance with agriculture inputs, advisory services, insurance and market access for the farmers. We use an agriculturally relevant and data-driven model to assess risk and return to develop funding schemes that fit the needs of smallholder farmers and the farm funders.</p>
        </div>
        <div>
          <a href="#" class="learn-more-btn">
            Learn More
          </a>
        </div>        
      </div>
      <div class="col-lg-6 order-first fund-second" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
        <img alt="Farmers" class="img-fluid funders-section-img-right" src="images/farmer.avif">        
      </div>
    </div>
  </div> 
</div>


		<!-- One -->
			<section id="one" class="wrapper style1 align-center background_img">
				<div class="container">
					<header>
						<h2>AgriMarket</h2>
						<p>Explore the new way of trading...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>Digital Market</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Blog</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Register with us</p>
						</section>
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
	         
	      
<div id="id01" class="modal">

<form class="modal-content animate" action="Login/login.php" method='POST'>
  <div class="imgcontainer">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container">
<section>
  <h3 class="login-item">Login</h3>
			<form method="post" action="Login/login.php">
				<div class="row uniform 50%">
					<div class="7u$">
						<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
					</div>
					<div class="7u$">
						<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
					</div>
				</div>
					<!-- <div class="row uniform login-content">
						<p>
							<b>Category : </b>
						</p>
						<div class="3u 12u$(small)">
							<input type="radio" id="farmer" name="category" value="1" checked>
							<label for="farmer">Farmer</label>
						</div>
						<div class="3u 12u$(small)">
							<input type="radio" id="buyer" name="category" value="0">
							<label for="buyer">Buyer</label>
						</div>
					</div> -->
			<div class="row uniform login-content">
				<p class="categoryp">
					<b>Category</b>
				</p>
				<div class="3u 12u$(small) flexitem login-cat">
				<div class="input-group">
					<select class="custom-select" id="inputGroupSelect04" >
						<option selected>choose</option>
						<option  id="farmer" name="category" value="1">Farmer</option>
						<option id="buyer" name="category" value="0">Buyer</option>
					</select>
					<!--<div class="input-group-append btn">
						<button class="btn btn-outline-secondary" type="button">Button</button>
					</div>-->
					</div>
				</div>
			</div>
					<center>
						<div class="row uniform">
							<div class="7u 12u$(small) login-submit">
								<input type="submit" value="Login" />
							</div>
						</div>
					</center>
				</form>
			</section>
			</div>
		</form>
	</div>

</div>


<div id="id02" class="modal">

<form class="modal-content animate" action="Login/signUp.php" method='POST'>
  <div class="imgcontainer">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container">

<section>
	<h3 class="signup">SignUp</h3>
	<form method="post" action="Login/signUp.php">
		<center>
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
				<!--<div class="input-group-append btn">
					<button class="btn btn-outline-secondary" type="button">Button</button>
				</div>-->
				</div>
			</div>
		</div>



			<div class="row uniform sign-up">
				<div class="3u 12u$(small) signup-btn">
					<input type="submit" value="Submit" name="submit" class="special" />
				</div>
				<div class="3u 12u$(small) signup-btn">
					<input type="reset" value="Reset" name="reset"/>
				</div>
			</div>
		</center>
	</form>
	</section>
  </div>
  </form>
  </div>


<script>
// typewriter area 
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
	  modal.style.display = "none";
  }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
	  modal1.style.display = "none";
  }
}



</script>


</body>
</html>

	    

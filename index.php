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
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
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

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
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

	    

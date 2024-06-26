<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>AgriMarket</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
    
    
<style>
section.\34 u.\31 2u\$\(small\).width_100\%.profilein {
    position: absolute;
    width: 6%;
    right: 20px;
    top: 100px;
    /* background: #000;
    opacity: .3; */
    border-radius: 5px;
    z-index: 99;
}
/* section.\34 u.\31 2u\$\(small\).width_100\%.profilein {
    width: 6%;
    background: transparent;
    opacity: .5;
    border-radius: 5px;
    float: right;
    position: absolute;
    top: 94px;
    right: 30px;
    z-index: 999;
    color: #fff;
    font-weight: 800;
} */
section.\34 u.\31 2u\$\(small\).width_100\%.profilein p {
    padding-bottom: 0;
    margin-bottom: 0;
}
section.\34 u.\31 2u\$\(small\).width_100\%.profilein img {
    overflow: hidden;
    width: 100%;
}
.\36 u.\31 2u\$\(xsmall\).\31 00\% {
    width: 100%;
    margin-top: 60px;
}
</style>

    </head>

    <body>
        <?php
            require 'menu.php';
        ?>
        <!-- <section class="4u 12u$(small) width_100% profilein">
            <a href="../profileView.php"><img src="../images/profile.png"></a>
            <p>My Profile</p>
        </section> -->

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>Welcome</h2>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                </p>

                <?php
                    if ( !$active )
                    {
                        echo
                        "<div>
                             

                        </div>";
                    }
                ?>
                  <h2><?php echo $name; ?></h2>
                  


                 <?php if($_SESSION['Category'] == 1): ?>
                    <div class="row uniform">
                        <!-- <div class="6u 12u$(xsmall)">
                            <a href=../profileView.php class="button special">My Profile</a>
                        </div> -->
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall) 100%">
                            <a href=../market.php class="button special">Digital Market</a>
                        </div>
                        <!-- <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div> -->
                    </div>

                <?php endif; ?>
        </section>

    </body>
</html>

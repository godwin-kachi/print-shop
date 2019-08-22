<?php 
	include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dezzyworld | Consult | Design | Print</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Nigeria best Print House, Graphic design in Africa, Top Print houses, Top Nigeria Branding companies, Award winning Designers in Nigeria, Lagos, Ibadan, Owerri,Port Harcourt, Enugu,Onitsha">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- ====================STYLESHEETS========================-->
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
	<!---==================================Favicon begins here-->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>
<body>
	<div class="wrapper">
		<div class="super_container">
			<!-- Header -->
			<header class="header trans_300">
				<!-- Top Navigation -->
				<div class="top_nav">
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<div class="top_nav_left">5, Oluyole Way, New Bodija, Ibadan. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<a href="https://wa.me/08067915982"> <i style="font-size:15px; padding-left:30px;" class="fa">&#xf232;</i>&nbsp; 0806 791 5982</a> 
									<a href="08067915982"><i style="font-size:15px; padding-left:10px;" class="fa">&#xf232;</i>&nbsp;0806 791 5982</a></div>	
							</div>
							<!-- <div class="row">
						<div class="part-deco quarter-1"></div>
					</div> -->
						<div class="col-md-2 text-right">
							<div class="top_nav_right">
								<ul class="top_nav_menu">
									<li class="account">
										<a href="dashboard/login.php">
											Login
											<!-- <i class="fa fa-angle-down"></i> -->
										</a>
									
									</li>
								</ul>
							</div>
						</div>
							
						

						</div>
					</div>
				</div>
				<!-- DESIGNS -->
				<div style="width:100%;">
					<div style="width:25%; background:cyan; height:8px; top:0; float:left;"></div>
					<div style="width:25%; background:magenta; height:8px; top:0; overflow-x:hidden; float: left;"></div>
					<div style="width:25%; background:yellow; height:8px; top:0; overflow-x:hidden; float:left;"></div>
					<div style="width:25%; background:black; height:8px; top:0; overflow-x:hidden;"></div>
				</div>
				<!-- Main Navigation -->
				<div class="main_nav_container">

					<div class="container">
						<div class="row img-div">
							<div class="my-logo col-lg-2 col-md-3 img-responsive">
								<a href="#"><img src="images/logo.jpg" alt="Dezzyworld Logo" class="img-responsive" /></a>
								<span class="small-signup"><a href="dashboard/login.php"><i class="fa fa-sign-in" aria-hidden="true"> </i>Login</a></span>
								<!-- <span class="small-signup"><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></span> -->
							</div>
							<div class="col-lg-8 col-md-6 col-sm-8 forms">
								<div class="form-group">
									<input type="search" class="form-control"  name="" id="">
									<!-- <input type="button" class="btn btn-success search"  value="Search"> -->
									<input type="button" class="btn btn-danger sell" value="Search">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row nav">
					<div class="col-lg-12 ">
						<nav class="nav-bar">
							<ul class="navbar_menu">
								<li><a href="#">home</a></li>
								<li><a href="quote.php">get a quote</a></li>
								<li><a href="#">how it works</a></li>
								<li><a href="contact.php">contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="row small-form">
					<div class="container-fluid">
						<input type="search" class=""  name="" id="" placeholder="Search">
						<button type="submit"><i class='fa fa-search'></i></button>
						<span class="hamburger_container">
							<i class="fa fa-bars " aria-hidden="true"></i>
						</span>
					</div>
				</div>
				</div>
			</header>

		<div class="fs_menu_overlay"></div>
		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
				<div class="hamburger_menu_content text-right">
				
						
						<li class="menu_item"><a href="#">home</a></li>
						<li class="menu_item"><a href="quote.php">get a quote</a></li>
						<li class="menu_item"><a href="#">how it works</a></li>
						<li class="menu_item"><a href="#">contact</a></li>
					</ul>
				</div>
			</div>

		<!-- Slider -->

		<div class="main_slider">
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<div class="col">
						<div class="list-group">
							<li class="list-group-item" >WHAT WE DO</li>
							<?php
								$sql = "SELECT * FROM category";
								$data = mysqli_query($db, $sql);
								$row = mysqli_fetch_assoc($data);
								
								
								while ($row = mysqli_fetch_assoc($data)):?>
							<li class="list-group-item"><a href="view_stock.php?id=<?=$row['category_id']?>"><?php echo $row['name']; ?></a></li>
					<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr />
		<br>
		<div class="container">
			<div class="row">
				<?php
					$product = "SELECT * FROM product_table, category WHERE product_table.category_id = category.category_id LIMIT 15";
					$fetch_product = mysqli_query($db, $product);

					while ($row = mysqli_fetch_assoc($fetch_product)) : ?>

					<?php
						$price = $row['price'];
						$formatted_price = number_format($price);
					?>

				
				
				<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card">
							<img src="dashboard/<?=$row['thumbnail'];?>" alt="<?=$row['name']?>" style="width:100%">
							<h6><?=$row['pname']?></h6>
							<p class="price">From	&#x20A6; <?=$formatted_price?></p>
							<button> <a href="view_stock.php?id=<?=$row['category_id']?>">Explore</a></button>
						</div> 
				</div>
				<?php endwhile; ?>
			</div>
		</div>	
		<br />
		<hr>
				<!--This is supposed to be the testimony area-->
		<div class="container elements">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 0 ">
					<div class="box elements">
						<img src="https://via.placeholder.com/75" alt="Testimony Images" class="testimony">
						<p>I am a developer with a dream to change the world</p>
					</div>

				</div>
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="box">
						<img src="https://via.placeholder.com/75" alt="Testimony Images"  class="testimony">
						<p>I am a developer with a dream to change the world</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 spaced">
					<div class="box">
						<img src="https://via.placeholder.com/75" alt="Testimony Images"  class="testimony">
						<p>I am a developer with a dream to change the world</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<div class="">
							<h5>Helpful Stuff</h5>
							<ul>
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<div class="">
							<h5>Follow Us</h5>
							<ul>
								<li><i class="fa fa-facebook" aria-hidden="true"></i><a href="#">Facebook</a></li>
								<li><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">Twitter</a></li>
								<li><i class="fa fa-instagram" aria-hidden="true"></i><a href="#">Instagram</a></li>
								<li><i class="fa fa-skype" aria-hidden="true"></i><a href="#">Skype</a></li>
								<li><i class="fa fa-pinterest" aria-hidden="true"></i><a href="#">Pinterest</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<div class="">
							<h5>Helpful Stuff</h5>
							<ul>
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<div class="">
							<h5>Follow Us</h5>
							<ul>
								<li><i class="fa fa-facebook" aria-hidden="true"></i><a href="#">Facebook</a></li>
								<li><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">Twitter</a></li>
								<li><i class="fa fa-instagram" aria-hidden="true"></i><a href="#">Instagram</a></li>
								<li><i class="fa fa-skype" aria-hidden="true"></i><a href="#">Skype</a></li>
								<li><i class="fa fa-pinterest" aria-hidden="true"></i><a href="#">Pinterest</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav_container">
							<hr>
							<div class="cr">&copy;2005 - 2019 All Rights Reserverd.</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/cart.js"></script>
</body>
</html>

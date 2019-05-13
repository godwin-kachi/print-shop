<?php
    require_once '../serverscripts/db_connect.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DMS Dashboard <?php echo $_SESSION['username'];?></title>
    <link rel="stylesheet" href="../styles/bootstrap4/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="../styles/main_styles.css" type="text/css" media="all">
    <link rel="stylesheet" href="../styles/dash-styles.css" type="text/css" media="all">
</head>
<body>
    <div class="wrapper">
        <div class="super_container">
            <!-- HEADER -->
            <header class="header trans_300">
                <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <ul class="navbar_menu nav_row">
                            <li><a href="">View Stocks</a></li>
                            <li><a href="">Post New Product</a></li>
                            <li><a href="">Manage Users</a></li>
                            <li><a href="">Inbox</a></li>
                            <li><a href="">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </header>
            <div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
				<div class="hamburger_menu_content text-right">
				
						<li class="menu_item has-children">
							<a href="#">
								My Account
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="menu_selection">
								<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"> </i>  Sign In</a></li>
								<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></li>
							</ul>
						</li>  
						<li class="menu_item"><a href="#">View Stock</a></li>
						<li class="menu_item"><a href="#">Post New Product</a></li>
						<li class="menu_item"><a href="#">Manage Users</a></li>
                        <li class="menu_item"><a href="#">Inbox</a></li>
                        <li class="menu_item"><a href="#">Log out</a></li>
                </div>
            </div>
        </div>
        
          <br>
          <br><br><br>
            <!-- BODY COMPOSITIONS -->
            <div class="container">
                <div class="col">
                    <h2>Welcome Username</h2>
                    <p>Your last login was 17-02-19 00:00:00</p>
                </div>
                <div class="row">
                <div class="thumbnails">
                    <p>You have added x products so far</p>
                </div>
                <div class="thumbnails">
                    <p>You have added x products so far</p>
                </div>
                </div>
            </div>

            <div class="container">
                <div class="col">
                    <h4>List of most recent products</h4>
                    <div id="scrollable">
                        some database fetch here
                    </div>

                </div>

            </div>
            
            
        </div>
    </div>

    
</body>
</html>
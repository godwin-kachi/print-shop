<?php
	require_once 'db_connect.php';
	if (isset($_REQUEST['send_quote'])) {

		# code...
		$cust_name = stripslashes($_POST['cust_name']);
		$cust_address = stripslashes($_POST['cust_address']);
		$cust_phone = stripslashes($_POST['phone_number']);
		$cust_email = stripslashes($_POST['email_address']);
		$cust_jobCategory = stripslashes($_POST['jobCategory']);
		$quantity = stripslashes($_POST['quantity']);
		$location = stripslashes($_POST['location']);
		$budget = stripslashes($_POST['budget']);
		$description = $_POST['short_description'];

		$db = mysqli_connect('localhost', 'root', '', 'dezzy') or die(mysqli_error($db));
		
			if ($db == true) {
				# code...
				$check_existence = "SELECT * FROM cust_quote WHERE `cust_name` = $cust_name";
				$verify = mysqli_query($db, $check_existence);
				$row = mysqli_num_rows($verify);
				if($row > 0){
					echo "You cannot have repeated enquiries at a time.";
					exit();
				}
			}

		if ($db == true) {
			# code...
			$sql = "INSERT INTO cust_quote (cust_name, cust_address, cust_phone, cust_email, job_category, job_quantity, delivery_location, budget,job_description)
			VALUES ('$cust_name', '$cust_address', '$cust_phone', '$cust_email', '$cust_jobCategory', '$quantity', '$location', '$budget', '$description')";
			$push = mysqli_query($db, $sql);
			
			if ($push == true) {
				# code...
				
				
				echo "<script type = 'text/javascript'>";
				echo "alert(Thank you for reaching out, a mail shall be sent to you shortly)";
				echo "</script>";
				sleep(5);
				header('location: index.html');
		
				exit();
			}else{
				echo "Sorry,I am having issues sending your request, please try again.";
				
			}
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dezzyworld Multiservices | Request a Quote</title>
	
</head>
<body>
	<header>
	<?php
	include_once 'pageHeader.php';
	?>
	</header>
	
	<br>
    <br>
	<div class="clear"></div>

	<div class="wrapper">
	<div class="container">
		<div class="row">
			
				<h3>Request a quote</h3>

				<!-- <aside class="aside-quote"> -->
					<p>Thank you for your interest in our products, please 
						fill the form below with details of what you would
						like us to do for you and expect a response in your mailbox soonest. <br>
						Please note that the fields marked with <span style="color:red;">*</span> are required.
					</p>
					<div class="container">
					<form class="form-group" action="quote.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="full_name">Full Name <span style="color:red;">*</span></label> <br>
							<input type="text" class="form-control" name="cust_name" placeholder="Full Name" required>
						</div>
						<div class="form-group"> 
							<label for="address">Address <span style="color:red;">*</span></label><br>
							<input type="text" class="form-control" name="cust_address" arial-describedby="addHelp" placeholder="Enter Address" required>
							<small id="addHelp" class="form-text text-muted"> &#9432; We'll never share your address with anyone, we need info as to where your jobs will be delivered to.</small>
						</div>
						<div class="form-group"> 
							<label for="phoneNumber">Phone Number <span style="color:red;">*</span></label><br>
							<input type="phone" class="form-control" name="phone_number" placeholder="Prefered Phone Number" required>
						</div>
						<div class="form-group"> 
							<label for="emailAddress">E-mail Address <span style="color:red;">*</span>	</label><br>
							<input type="email" class="form-control" name="email_address" placeholder="Email Address" required>
						</div>
						<div class="form-group"> 
							<label for="jobCategory">Job Category <span style="color:red;">*</span>	</label><br>
							<select class="form-control" id="jobCategory" name="jobCategory" required>
								<option selected>Select One</option>
								<option>Flex</option>
								<option>Letter Head</option>
								<option>Small Stickers</option>
								<option>Other jobs</option>
								<option>Other jobs</option>
								<option>Other jobs</option>
							</select>
						</div>
						<div class="form-group"> 
							<label for="Quantity">Quantity <span style="color:red;">*</span>	</label><br>
							<input type="text" class="form-control" name="quantity" placeholder="What quantity do you wish supplied?" required>
						</div>
						<div class="form-group"> 
							<label for="location">Delivery Location <span style="color:red;">*</span>	</label><br>
							<input type="text" class="form-control" name="location" placeholder="When completed, where would you want the jobs delivered to?" required>
						</div>
						<div class="form-group"> 
							<label for="budget">Budget &#8358; <span style="color:red;">*</span>	</label><br>
							<input type="text" class="form-control" name="budget" placeholder="Budget in Naira (&#8358;)" required>
						</div>
						<div class="form-group"> 
							<label for="emailAddress">Any other requirement? <span style="color:red;">*</span>	</label><br>
							<textarea class="form-control" name="short_description" required></textarea>
						</div>
						<div class="form-group my-center"> 
							<input type="submit" class="btn btn-success" name="send_quote" value="Request Quote">
						</div>


					</form>
					</div>
				<!-- </aside> -->
				<hr>
			</div>

			<!-- </div> -->
	</div>
	
	<div class="clear">



	</div>

</div>
</div>

<!-- FOOTER AREA -->

		<footer>
			<?php
				include_once "pageFooter.php";

			?>

	</footer>
	
</body>
</html>
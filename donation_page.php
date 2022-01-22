<!DOCTYPE html>
<html lang="en">

<head>
	<title>Donation Form</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
</head>

<body>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
		$amount = $_POST['amount'];
        
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "alumni_db";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `donation` (`name`, `lastname`, `email`, `phone`, `address`, `city`, `state`, `amount`) VALUES ('$name', '$lastname', '$email', '$phone', '$address', '$city ', '$state', '$amount');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

    }

    }

    
?>
	
    <h1 class="header-w3ls">
		Alumni Donation Form</h1>


	<div class="Donation-main-w3ls">
		<form action="#" method="post">
			<div class="main">
				<div class="form-left-to-w3l">

					<input type="text" name="name" placeholder="Name" required="">
					<div class="clear"></div>
				</div>
				<div class="form-right-to-w3ls">

					<input type="text" name="lastname" placeholder="Last Name" required="">
					<div class="clear"></div>
				</div>

			</div>
			<div class="main">
				<div class="form-left-to-w3l">
					<input type="email" name="email" required="" placeholder="Email">
				</div>
				<div class="form-right-to-w3ls ">

					<input type="text" name="phone" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="form-add-to-w3ls add">

				<input type="text" name="address" placeholder="Street Address" required="">
				<div class="clear"></div>
			</div>


			<div class="main">
				<div class="form-left-to-w3l">

					<input type="text" name="city" placeholder="City" required="">
					<div class="clear"></div>
				</div>
				<div class="form-right-to-w3ls">
					<input type="text" name="state" placeholder="State" required="">
					<div class="clear"></div>
				</div>
			</div>
			<div class="main">
				<div class="form-left-to-w3l">
					<input type="text" name="Pin code" placeholder="Pin Code" required="">
					<div class="clear"></div>
				</div>
				<div class="form-right-to-w3ls">
					<select class="form-control buttom">
												<option value="">
												Select Country</option>
													<option value="category2">India</option>
													<option value="category1">Germany</option>
													<option value="category3">America</option>
													<option value="category3">London</option>
													<option value="category3">France</option>
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option>
													<option value="category3">Nepal</option>
													<option value="category3">Other</option>
												</select>
				</div>
			</div>
			<div class="main">
				<div class="form-right-to-w3ls">
					<select class="form-control buttom">
												<option value="">
												Donation Type</option>
													<option value="category2">Once-Off-Gift</option>
													<option value="category1">Regular-Monthly-Gift</option>
				
												</select>
				</div>
				<div class="form-right-to-w3ls">
					<select class="form-control buttom"name="amount">
												<option value="">
												Donation Amount</option>
													<option value="20000">20000</option>
													<option value="50000">50000</option>
													<option value="70000">70000</option>
				
												</select>
				</div>
			</div>
			<div class="clear"></div>

			<div class="clear"></div>

			<div class="form-control-w3l">
				<textarea name="Message" placeholder="Any Queries..." required=""></textarea>
			</div>

			<div class="btnn">
				<button type="submit">Send</button><br>
			</div>
		</form>
        <div class="clear"></div>
</body>
</html>
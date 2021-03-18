<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mobilis School Contact Us</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/exam.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">About Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<h5>We are Located along Waiyaki Way ,200km from Nairobi town</h5>
<h5>We work hard to ensure better education in this country </h5>
<h5>Go to the <a href="contact.php">Contact Us</a> page to Talk to us </h5>
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p> </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>
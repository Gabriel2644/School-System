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
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="contacts">
				<div class="cts"><a style="display: flex;" href="#"><img src="img/telephone.png" alt="tel"> <a href="#">0731734909</a></div>
				<div class="cts"><a style="display: flex;" href="#"><img src="img/whatsapp.png" alt="Whatsapp"><a href="#">+254793958377</a></div>
				<div class="cts"><a style="display: flex;"  href="#"><img src="img/facebook.png" alt="Facebook"><a href="#">Mobilis</a></div>
				<div class="cts"><a style="display: flex;" href="#"><img src="img/twitter.png" alt="Twitter"><a href="#">@Mobilis</a></div>
				<div class="cts"><a style="display: flex;" href="#"><img src="img/instagram.png" alt="Ig"><a href="#">Mobilis</a></div>
				<div class="cts"><a style="display: flex;" href="#"><img src="img/gmail.png" alt="Email">mobilisschool@mobilis.mbs.ke</a></div>
				</div>	
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
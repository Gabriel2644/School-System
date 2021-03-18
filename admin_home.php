<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img style="margin-left:90px; width:90%" src="img/exam.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						Mobilis School is The school you want your child to be. Learning activities are the best in East Africa Today 
					</p>
					
					<p class="para">
						At Mobilis School we teach your son or daughter through Physical classes and Online Using our mobilis Elearning and vlearning. So your kid will need a laptop or a tablet at home for elearning and vlearning. Kids are not limited to coming with phones and tablets to school
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>
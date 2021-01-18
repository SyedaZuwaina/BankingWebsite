<!DOCTYPE html>
<html>
<head>
	<title>Transaction Successful</title>


	<style type="text/css">

		
		h2{
			text-align: center;
		}
	</style>
	
</head>
<body>
  
	<?php include 'conn.php' ?>
	
	<?php 
	$sender = $_GET["sender"];
	$recipient = $_GET["recipient"];
	$amount = $_GET["amount"];
	?>
	<h2>Congratulations!! The amount has been successfully transferred to <?php echo $recipient ?> </h2>

</body>
</html>
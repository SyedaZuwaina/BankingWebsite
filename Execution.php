<!DOCTYPE html>
<html>
<head>
	<title>Home</title>


    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="main-div">
<div class="center-div">

<?php include 'conn.php' ?>

<div id="navbar">
  <a class="one" href="Homepage.php">Home</a>
  <a class="two" href="Display.php"> View Customers</a>
  <a class="three" href="History.php" >Transaction History</a>
  </div>

  <?php 

  
	$sender = $_GET["sender"];
	$recipient = $_GET["recipient"];
	$amount = $_GET["amount"];
    
    

	






	$sql5="SELECT name, amount FROM customers WHERE name='$sender'";
	$result5=mysqli_query($con, $sql5); 
	$row=mysqli_fetch_assoc($result5);
	$money= $row['amount'] ;

	
	


	
    
     $sql3 = "SELECT name,id  FROM customers WHERE name='$recipient' ";
	$result3 = mysqli_query($con, $sql3);
	
	

    if (mysqli_fetch_assoc($result3)<1){ 
        include 'Nouser.php';
    } 
   elseif ($money<$amount){
        include 'Insufficientbalance.php';
        
    }

	
	
	else{
	 	$sql4 = "UPDATE customers SET amount=amount-$amount WHERE name='$sender'";
		$sql2= "UPDATE customers SET amount=amount+$amount WHERE name='$recipient' ";
 		$result2 = mysqli_query($con, $sql2); 
 		$result3 = mysqli_query($con, $sql4);
 		$sql = "INSERT INTO transaction_history VALUES ('$sender',                '$recipient',  '$amount')";
		$result = mysqli_query($con, $sql); 
 		include 'Successfultransaction.php';
 		

 	}


  
	
	
	



	

?>

</body>
</html>


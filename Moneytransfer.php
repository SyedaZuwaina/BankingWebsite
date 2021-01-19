<!DOCTYPE html>
<html>
<head>
    <title>Transfer Money</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="money.css">

    </head>
<body>

<div class="main-div">
<div class="center-div">


		<div id="navbar">
  <a class="one" href="Homepage.php">Home</a>
  <a class="two" href="index.php">View Customer</a>
  <a class="three" href="History.php">Transaction History</a>
  </div>



  <div class="container">
  <form action="Execution.php" method="get">
			<label><b>Sender </b></label>
			<input list="names" type="text" name="sender", placeholder="Enter the name " required>
			<datalist id="names">
                
            <option value="Reshma"></option>
				<option value="Pujita"></option>
				<option value="Soumi"></option>
				<option value="Anjana"></option>
				<option value="Snigdha"></option>
				<option value="Disha"></option>
				<option value="Karuna"></option>
				<option value="Lasya"></option>
				<option value="Simran"></option>
				<option value="Zoha"></option>
				
			</datalist>



  </br>
			<label><b>Recipient </b></label>
			<input list="names" type="" name="recipient" placeholder="Enter the name" required>
			<datalist id="names">
				<option value="Reshma"></option>
				<option value="Pujita"></option>
				<option value="Soumi"></option>
				<option value="Anjana"></option>
				<option value="Snigdha"></option>
				<option value="Disha"></option>
				<option value="Karuna"></option>
				<option value="Lasya"></option>
				<option value="Simran"></option>
				<option value="Zoha"></option>
				
			</datalist>

            </br>
			<label><b>Amount </b></label>
            <input type="" name="amount" placeholder="Enter the amount" required>
            
</br>
</br>
			<input class="click" type="submit" name="" value="Send">
		</form>
	</div>


</body>
</html>

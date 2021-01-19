<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet"  href="navbar.css">

<link rel="stylesheet" href="style.css">


</head>
<body>

<div class="main-div">
<div class="center-div">
<div class="table-responsive">

<div id="navbar">
  <a class="one" href="Homepage.php">Home</a>
  <a class="two" href="index.php">View Customer</a>
  <a class="three" href="History.php">Transaction History</a>
  </div>
  
</br>
</br>
<h1>Transaction History</h1>

  

    </br>
    


<table>
<thread>
<tr>
<th>Sender</th>
<th>Recipient</th>
<th>Amount</th>
</tr>
</thread>
<tbody>

<?php

$server = "localhost";
$username = "root";
$password = "";

    $con = mysqli_connect($server, $username, $password);
    $db = mysqli_select_db( $con, 'my_database');

    if(!$con){
      die("Connection to this database failed due to" .
mysqli_connect_error());
    }

    $selectquery= "select * from transaction_history";
    $query = mysqli_query($con,$selectquery);
    $nums= mysqli_num_rows($query);
    while($res= mysqli_fetch_array($query)){



?>


<tr>
<td><?php echo $res['sender']; ?> </td>
<td><?php echo $res['recipient']; ?> </td>
<td><?php echo $res['amount']; ?> </td>

</tr>




<?php


    }

    ?>





</tbody>
</table>
</div>
</div>
</div>
</body>
</html>

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

?>

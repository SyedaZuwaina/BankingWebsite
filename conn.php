<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'my_database');
if($con){
    //echo "connected";
}
else{
    //echo "Not connected";
}

?>
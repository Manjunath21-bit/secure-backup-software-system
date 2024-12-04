<?php
    //this is the connection file
$server= "localhost";
$username="root";
$password="1111";
$con= mysqli_connect($server,$username,$password,'filemanager');
if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}

?>

<?php
$servername="localhost";
$username="root";
$password="";
$database="crud_operations";
$conn=mysqli_connect($servername,$username,$password,$database);
//checking if connection was successful or not...
if(!$conn){
      die ("Connection not successful ".(mysqli_connect_error($conn)));
}

?>
<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host,$user,$pass);

//check connection
if(!$conn){
  die("Connection failed".mysqli_connect_error());
  }
$sql = "CREATE DATABASE mydb";
if (mysqli_query($conn,$sql)){
  echo "Database is created";
}
else{
  echo "Database not created".mysqli_error($conn);
}

mysqli_close($conn);
 ?>

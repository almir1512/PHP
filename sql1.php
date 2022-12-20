<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'mydb';
$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
  die("Connection failed".mysqli_connect_error());
}
echo "Connection success ";
$sql = "CREATE TABLE login(username varchar(20) not null,password varchar(20) not null)";
if(mysqli_query($conn,$sql)){
  echo "Table created";
}
else{
  echo "Table NOT created".mysqli_error($conn);
}
mysqli_close($conn);
 ?>

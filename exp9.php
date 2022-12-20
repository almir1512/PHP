<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$phone = $_POST['phone'];

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'mydb';

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
  die("Connection failed");
}
echo "Connected";
$sql = "INSERT INTO register VALUES('$fname','$lname','$age','$phone')";

if(mysqli_query($conn,$sql)){
  echo "insert done";
}
else{
  echo "insert not success";
}
mysqli_close($conn);
 ?>

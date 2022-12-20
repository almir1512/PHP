<?php
$u = $_POST['username'];
$p = $_POST['passw'];
$conn = mysqli_connect('localhost:3306','root','','mydb');
if(!$conn){
  die("Connection failed".mysqli_connect_error());
}
echo "Connection success";

$sql = "INSERT INTO login values('$u','$p')";
if(mysqli_query($conn,$sql)){
  echo "Login Success !";
}
else{
  echo "Login denied".mysqli_error($conn);
}

mysqli_close($conn);
 ?>

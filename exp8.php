<?php

$u1 = $_POST['username1'];
$p1 = $_POST['passw1'];

$conn = mysqli_connect('localhost:3306','root','','mydb');
if(!$conn){
  die("connection failed".mysqli_connect_error());

}
echo "Connection success";
$sql = "SELECT username, password from login where username = '$u1' and password = '$p1'";
$result = $conn->query($sql);
if($result){
if($result->num_rows>0){
  while ($rows= $result->fetch_array()){
    echo "Login success";
  }}
}
else{
    echo "Login unsuccesssful try signing up ";
}

mysqli_close($conn);
 ?>

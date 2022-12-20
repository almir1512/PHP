<?php
$conn = mysqli_connect('localhost:3306','root','','mydb');
$sql = "SELECT * FROM login where username = 'almir' and password = 'almir123'";
$result = $conn->query ($sql);
$row = $result->fetch_assoc();

echo $row['username'];

 ?>

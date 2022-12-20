<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>
  <body>
    <h1>Update Phone No</h1>
    <form action="exp9upd.php" method="post">

    <label for="oldphone">Enter Old Phone Number : </label>
    <input type="text" name="oldphone">
    <label for="phoneupd">Enter New Phone Number : </label>
    <input type="text" name="phoneupd">
    <input type="submit" name="upd" value="Update">
  </form>
    <?php
    $newphone = $_POST['phoneupd'];
    $oldphone = $_POST['oldphone'];
    $conn = mysqli_connect('localhost:3306','root','','mydb');
    $sql = "UPDATE register SET phone='$newphone' WHERE phone = '$oldphone'";

    if(mysqli_query($conn,$sql)){
      echo "Success" ;

    }
    else{
      echo "Update Denied ";
    }
     ?>
  </body>
</html>

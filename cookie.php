<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="cookie.php" method="post">
      username : <input type="text" name="user" >
      password: <input type="password" name="password">
      <input type="submit" name="create" value="create">
      <input type="submit" name="delete" value="delete">


    </form>
   <?php
    if(isset($_POST['create'])){
      setcookie('name',$_POST['user'],time()+86400,"/");
      setcookie('password',$_POST['password'],time()+86400,"/");
      echo "Cookie created";

    }
    if(isset($_POST['delete'])){
      setcookie('name',$_POST['user'],time()-3600);
      setcookie('password',$_POST['password'],time()-3600);
      echo "Cookie deleted";

    }
    if(isset($_POST['modify'])){
      $name= $_POST['user'];
      $name = "Almir";
      $pass= $_POST['password'];
      $pass = "1234";

      setcookie('name',$name,time()-86400,"/");
      setcookie('password',$pass,time()+86400,"/");
      echo "modified";

    }


    ?>
  </body>
</html>

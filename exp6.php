<?php
class mailcheck extends Exception{
  public function errormsg()
  {
    $errormsg = "Error is on line".$this->getline()." in ".$this->getFile()."<br><br><u>".$this->getMessage()."</u> is not a valid email address.";
    return $errormsg;
  }
}

  $email= $_POST['email1'];
  try {
    if (filter_var($email,FILTER_VALIDATE_EMAIL)===False) {
      throw new mailcheck($email);
    }
    else{
      echo $email." is a valid email address.";
    }
  } catch (mailcheck $e) {
    echo $e -> errormsg ();
  }


     ?>

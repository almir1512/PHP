<?php
/**
 *
 */
interface personaldetails
{
  public function display_personal();
}

class demo implements personaldetails
{
  public function display_personal()
  {
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "Student's Name :".$name ;
    echo "Student's Age :".$age ;
  }
}
trait fatherdetails
{
  function disp_father()
  {
    $fname = $_POST['fname'];
    $occ = $_POST['occ'];
    echo "Father's Name :".$fname ;
    echo "Occupation :".$occ ;
  }
}
trait motherdetails
{
  function disp_mother()
  {
    $mname = $_POST['mname'];
    $occ1 = $_POST['occ1'];
    echo "Father's Name :".$mname ;
    echo "Occupation :".$occ1 ;
  }
}
class alldetails extends demo{
  use fatherdetails,motherdetails;

}
$obj1 = new alldetails();
$obj1->disp_father();

 ?>

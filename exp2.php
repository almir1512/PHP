<?php
  $cars = array();
  $cars['Volvo']= array (
      'cost'=>'100k',
      'mileage' => '20kmpl',
      'capacity' => '5 persons'
  );
  $cars['BMW coupe']= array (
      'cost'=>'200k',
      'mileage' => '10kmpl',
      'capacity' => '2 persons'
  );

  echo $cars['BMW coupe']['mileage'];
 ?>

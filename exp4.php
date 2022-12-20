<?php
  $new_string = $_POST['str'];
  echo "The entered string is : ".$new_string;
  echo "<br>The length of the string is ".strlen($new_string);
  echo "<br>The reverse of the string is ".strrev($new_string);
  echo "<br>The no of word in the string are ".str_word_count($new_string)." words";
  echo "<br>The length of the string is ".strpos($new_string);
 ?>

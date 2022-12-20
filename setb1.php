<?php
$n1 = $_POST['a'];
$n2 = $_POST['b'];
$ch = $_POST['c'];

    if($ch==1)
    {
        $c = $n1 + $n2;
        echo"addition is: $c";
    }
    else if($ch==2)
    {
        $c = $n1 - $n2;
        echo"subtraction is: $c";
    }
    else if($ch==3)
    {
        $c = $n1 * $n2;
        echo"multiplication is: $c";
    }
    else if($ch==4)
    {
        $c = $n1 / $n2;
        echo"Division is: $c";

    }
?>

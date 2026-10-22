<?php
include "about_me.php";
echo "<HR>";
echo "SID: C113181126<br/>";
echo "Name: 王宥惠<br/>";
echo "EX02<br/>";
echo "<HR>";
$scores=array(22,16,30,24);
$total=0;

foreach ($scores as $element){
    echo "element: $element <br/>";
    $total+= $element;
}
echo "total:" .$total;

print_r($scores);

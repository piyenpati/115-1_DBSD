<?php
include "about_me.php";
echo "<HR>";
echo "SID: C113181126<br/>";
echo "Name: 王宥惠<br/>";
echo "EX03<br/>";
echo "<HR>";

$arr=array(
    "color" =>"black",
    "name" => "apple",
    "Shape" => "triangle",
    100
);
$arr["type"]="PHP";
unset($arr["type"]);

foreach($arr as $key => $value){
    echo "Key =>$value";
}
echo "<br/>";
print_r($arr);


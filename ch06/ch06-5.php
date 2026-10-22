<?php
echo "<HR>";
echo "SID: C113181126<br/>";
echo "Name: 王宥惠<br/>";
echo "EX01<br/>";
echo "<HR>";


include "ch06-5-1.inc";
include "ch06-5-2.inc";

$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";

require ("ch06-5-1.inc"); 
$file = "ch06-5-1.inc";
require $file;

require ("about_me.php");

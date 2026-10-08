# SID: C113181126<BR>
# Name: 王宥惠<BR>
EX03
<HR>
<?php
$total =0 ;
for ($i=0;$i<=15; $i++){
    if($i %2 == 1){
        continue;
    }
    echo "|" .$i;
    $total +=$i;
}
?>
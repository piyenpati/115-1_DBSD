<?php
include "about_me.php";
echo "<HR>";
echo "SID: C113181126<br/>";
echo "Name: 王宥惠<br/>";
echo "EX04<br/>";
echo "<HR>";

$ip =$_SERVER["REMOTE_ADDR"];
echo "IPAddress: ". $ip . "<br/>" ;
$path=$_SERVER["SCRIPT_NAME"];
echo "PATH: " . $path. "" ;
?>

<table border="1">
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    <?php
    foreach ($_SERVER as $key => $value){
        echo "<TR><TD>" . $key . "</TD>" ;
        echo "<TD>" . $value."</TD></TR>";
    }
    ?>
</table>

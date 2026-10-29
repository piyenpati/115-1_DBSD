<?php
function printHeader(){
    echo "SID: C113181126<br/>";
    echo "Name: 王宥惠<br/>";
    echo "EX04<br/>";
}
printHeader();

header("Location: ch08-1-1.php");
exit;
echo"使用header()函數轉址到其他網頁或PHP程式<br/>";

<?php
//使用雙引號，變數可以嵌入字串來顯示
$myVar = "Darren";
echo "Hi, $myVar <br />";
echo "Hi, {$myVar} <br />";
echo "Hi, ${myVar} <br />";
echo "<br /><br />";

//如要嵌入兩個
$myVar2 = "Joanna";
echo "Hi, $myVar $myVar2<br />";
echo "Hi, {$myVar}{$myVar2} <br />";
echo "Hi, ${myVar}${myVar2} <br />";
echo "<br /><br />";


//使用單引號括住字串，變數會變成一般字串
echo 'Hi, $myVar <br />';
echo 'Hi, {$myVar} <br />';
echo 'Hi, ${myVar} <br />';



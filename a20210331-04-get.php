<?php
//http://192.168.21.114/proj60/a20210331-4-get.php?a=10&b=2
// echo  $_GET['a'] + $_GET['b'];
//在.php後面加 ? 
//問號後面 參數=值
//網址裡面的a跟b的值已經是字串了





//若要避免notice出現 可使用內建語法
//轉換成數值
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

//php7中新語法
// $a = $_GET['a'] ?? 0;
// $b = $_GET['b'] ?? 0;

echo $a + $b;

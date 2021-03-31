<?php


//false: 0,' ', null, 
//在js中:
// 5||7 輸出為 5，要出書布林值需要轉換
//轉換方式為 Boolean(0) 輸出為false
//或是!0 輸出為true






//php中:
echo 5 || 7; //輸出1 在php中代表true

$a = 5 or $b = 6; //or 的優先權比 = 還低,先執行 = 
$c = 5 || $d = 6; // ||的優先權比 = 還高 5忽略掉旁邊的等號,先做 5|| $d = 6 判斷為true,回傳給c為true 所以$c = 1;

echo "\$a=$a, \$b=$b<br>";
echo "\$c=$c, \$d=$d<br>";

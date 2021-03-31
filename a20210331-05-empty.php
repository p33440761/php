<?php
//empty判斷是否為空值 是的話回傳true 
//intval 將字串轉為數值
$a = empty($_GET['a']) ? 0 : intval($_GET['a']);
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);

echo ($a + $b) . '<br>';  // . 做字串串接

$c = 0;

echo empty($c) ? '空的' : '不是';

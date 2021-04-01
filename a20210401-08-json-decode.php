<?php
$str = '{"name":"大衛","age":25,"gender":"male"}';

$ar = json_decode($str);
echo "<br> {$ar->name}";
echo "<br> {$ar->age}";
//第二個值放ture讓他是關聯式物件 要取她的值就必須用[] 不可用瘦箭頭
$ar2 = json_decode($str, true);
echo "<br> {$ar2['name']}";
echo "<br> {$ar2['age']}";

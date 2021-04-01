<?php

$ar1 = [];
for ($i = 1; $i < 42; $i++) {
    $ar1[] = $i;
    //php中join的寫法
}
shuffle($ar1); //隨機排列

//将一个一維陣列的值转化为字符串
echo implode('-', $ar1); //implode ( string $separator , array $array ) : string

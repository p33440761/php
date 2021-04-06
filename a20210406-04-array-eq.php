<?php
$p1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];
$p2 = $p1;
$p3 = &$p1;
//要將p3等於p1要加&
//PHP 的引用允許你用兩個變數來指向同一個內容

$p1['name'] = '比爾';
echo json_encode($p2, JSON_UNESCAPED_UNICODE);
echo json_encode($p1, JSON_UNESCAPED_UNICODE);
echo json_encode($p3, JSON_UNESCAPED_UNICODE);

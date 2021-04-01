<?php

$arr1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male'
];
$arr2 = [2, 3, 4, 8, 9];
foreach ($arr1 as $k => $v) {
    echo "$k : $v<br>";
};
echo '--------------------<br>';
foreach ($arr2 as $k => $v) {
    echo "$k : $v<br>";
};

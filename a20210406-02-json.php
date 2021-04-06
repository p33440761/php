<?php
$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];
//轉為json js用Json.stringify
// echo json_encode($persons);


//將中文字亂碼轉為正常
echo json_encode([
    'get' => $_GET,
    'person' => $persons
], JSON_UNESCAPED_UNICODE);
// header('Content-Type: application/json');
                //前面有空白

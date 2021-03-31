
<?php
//php字串可以直接換行
// $a = 'php - mysql 
//     是好朋友';

//單、雙引號，在跳脫字元的使用
//雙引號裡不要跳脫單引號 其他都可
// 只能放變數值 不可做運算
$a = "xyz\nabc\"def\"ghi\\";
echo $a;
echo '<br>';
//只認\\及'
$b = 'xyz\nabc\"def\"ghi\\';
echo $b;

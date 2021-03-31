<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數</title>
</head>

<body>
    <?php
    $name = 'Bill';
    //雙引號裡面可以放變數
    echo "Hello $name";
    echo '<br>';
    //單引號放單純內容 不要放變數
    echo 'Hello $name';
    echo '<br>';
    //變數是陣列的話 要用{}包起來
    echo "Hello {$name}123";
    echo '<br>';
    echo "Hello ${name}123";
    echo '<br>';


    ?>
</body>

</html>
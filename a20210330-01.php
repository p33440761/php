<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //以define()設定常數，常數不加$字號，設定完後就不能變更，通常以大寫以利區別
    define('MY_CONST', 3.14159);
    echo __DIR__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __LINE__;
    echo '<br>';


    echo MY_CONST;
    echo '<br>';




    ?>
</body>

</html>
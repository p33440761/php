<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?= isset($_GET['age']) ? "年齡: {$_GET['age']}" : "沒有給年齡" ?></h2>
    <?php
    if (isset($_GET['age']) and intval($_GET['age']) >= 18) {
        echo '<img src="./images/01.jpg" alt="">';
    } else {
        echo '<img src="./images/02.png" alt="">';
    };
    ?>


</body>

</html>
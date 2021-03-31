<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- action 放要將資料傳送到的目的地 -->
    <form action="" method="get">
        <input type="number" min="0" max="100" name="score" value="<?= $_GET['score'] ?? '' ?>">
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['score'])) {

        $s = intval($_GET['score']);

        switch ($s) {
            case 100:
            case 90:
                $g = 'A';
                break;
            case 80:
                $g = 'B';
                break;
            case 70:
                $g = 'C';
                break;
            case 60:
                $g = 'D';
                break;
            default:
                $g = 'F';
        }
        echo "<h2>$g</h2>";
    }
    if ($_GET['score'] > 100 || $_GET['score'] < 0) {
        echo "請重新輸入";
    }
    ?>
</body>

</html>
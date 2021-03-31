<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) :
                    $c =  sprintf('#99%X%X%X%X', $j, $j, $i, $i)
                ?>
                    <td style="background-color:<?= $c ?>"></td>
                <?php endfor ?>

            </tr>
        <?php endfor ?>
    </table>


</body>

</html>
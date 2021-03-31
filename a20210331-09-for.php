<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid #ccc;
        }

        td {
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) : ?>
                    <td><?php printf('%s * %s = %s', ($i + 1), ($j + 1), ($i + 1) * ($j + 1)); ?></td>
                <?php endfor ?>

            </tr>

        <?php endfor; ?>
    </table>


</body>

</html>
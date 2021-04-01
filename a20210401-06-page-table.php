<!-- 用來處理 -->
<?php include __DIR__ . '/parts/config.php' ?>
<?php
$tilte = '我的主頁';

$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male'
    ],
    [
        'name' => 'Alex',
        'age' => 25,
        'gender' => 'male'
    ],
    [
        'name' => 'Mary',
        'age' => 22,
        'gender' => 'female'
    ],
    [
        'name' => 'Candy',
        'age' => 18,
        'gender' => 'female'
    ]
];
shuffle($persons);

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $p) : ?>
                <tr>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['age'] ?></td>
                    <td><?= $p['gender'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>
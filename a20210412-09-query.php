<?php
// 連線資料庫
require __DIR__ . '/parts/__contact_db.php';
$stmt = $pdo->query('SELECT * FROM address_book');

// $row = $stmt->fetch();
// echo json_encode($row);

// $row = $stmt->fetchAll();
// 如果是fetchAll 就無法執行迴圈 因為迴圈抓不到資料 在$row = $stmt->fetchAll(); 就已經將資料一次抓完了
// while($row = $stmt->fetchAll()){
//     echo "{$row['name']} <br>";
// }

while ($row = $stmt->fetch()) {
    echo "{$row['name']} <br>";
}

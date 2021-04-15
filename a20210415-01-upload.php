<?php
//$_FILES['avatar'] 拿到的是陣列
if (isset($_FILES['avatar'])) {
    echo json_encode($_FILES['avatar']);
}

// {
//     "name": "m1.png",
//     "type": "image/png",
//     "tmp_name": "C:\\xampp\\tmp\\php4FF.tmp",
//     "error": 0,
//     "size": 6549910
// }
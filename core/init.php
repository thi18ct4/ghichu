<?php

// Include các thư viện
require_once 'classes/DB.php';
require_once 'classes/Session.php';

// Khởi tạo object DB
$db = new DB();
// Kết nối database
$db->connect();

// Múi giờ chung
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = date("Y-m-d H:i:sa");
$user = false;
// Nếu tồn tại $user
if (isset($_COOKIE['token'])) {
    $token = addslashes($_COOKIE['token']);
    $sql_token = "SELECT time, id_user FROM token WHERE token = '$token'";
    $db_token = $db->fetch_assoc($sql_token, 1);
    if (isset($db_token['time'])) {
        $db_time = strtotime($db_token['time']);
        if (time() - $db_time <= 2592000) {
            $user = true;
            $id_user = $db_token['id_user'];
            // Lệnh truy vấn thông tin user
            $sql_get_data_user = "SELECT * FROM users WHERE id_user = '$id_user'";
            // Lấy thông tin user
            $data_user = $db->fetch_assoc($sql_get_data_user, 1);

        } else {
            $sql_delete_token = "DELETE FROM `token` WHERE `token`.`token` = '$token'";
            $db->query($sql_delete_token);
        }
    }
}

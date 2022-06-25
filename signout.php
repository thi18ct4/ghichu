<?php
 
// Include database, session, general info
require_once 'core/init.php';
// Xoá cookie
$sql_delete_token = "DELETE FROM `token` WHERE `token`.`token` = '$token'";
$db->query($sql_delete_token);
// Trở về trang chủ
header('Location: index.php');

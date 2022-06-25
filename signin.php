<?php

// Include database, session, general info
require_once 'core/init.php';

// Nếu tồn tại $user
if ($user) {
    header('Location: index.php'); // Di chuyển đến trang chủ
}

// Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
$user_signin = $db->real_escape_string(@$_POST['user_signin']);
$pass_signin = @md5($_POST['pass_signin']);

// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formSignin .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formSignin .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formSignin .alert').attr('class', 'alert alert-success');</script>";

// Lệnh SQL kiểm tra sự tồn tại của username
$sql_check_user_exist = "SELECT username FROM users WHERE username = '$user_signin'";

// Nếu tồn tại username
if ($db->num_rows($sql_check_user_exist)) {
    // Lệnh SQL kiểm tra password tương ứng với username trên
    $sql_check_login = "SELECT id_user FROM users WHERE username = '$user_signin' AND password = '$pass_signin'";

    // Nếu đúng
    if ($db->num_rows($sql_check_login)) {
        // Lưu đăng nhập
        $md5 = md5(time()).md5(rand(0, 100));
        $id_user = $db->fetch_assoc($sql_check_login, 1)['id_user'];

        $sql_insert_token = "INSERT INTO token(token, id_user) VALUES('$md5','$id_user')";
        $db->query($sql_insert_token);

        setcookie("token", $md5, time()+2592000, "/", "", 0);

        // Giải phóng kết nối
        $db->close();

        // Hiển thị thông báo và tải lại trang
        echo $show_alert.$success_alert." Đăng nhập thành công.
            <script>
                location.reload();
            </script>
        ";
    }
    // Ngược lại nếu sai
    else {
        echo $show_alert.'Mật khẩu không chính xác, đảm bảo đã tắt Caps Lock.';
    }
}
// Ngược lại không tồn tại username
else {
    echo $show_alert.'Tên đăng nhập không thuộc bất cứ tài khoản nào.';
}

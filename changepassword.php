<?php

// Include database, session, general info
require_once 'core/init.php';
// Include header
require_once 'includes/header.php';

// LAYOUT
// Nếu tồn tại $user
if ($user) {
    // Kiểm tra hành động
    // Nếu thực hiện hành động
    if (isset($_GET['ac'])) {
        // Xử lý chuỗi $ac
        $ac = addslashes(trim(htmlentities($_GET['ac'])));

        if ($ac == 'change_password') {
            // Include template form đổi mật khẩu
            require_once 'templates/change-pass-form.php';
        }
    }
    // // Ngược lại không thực hiện hành động
    // else {
    //     // Include template danh sách ghi chú
    //     require_once 'templates/list-note.php';
    // }
}
// Ngược lại không tồn tại $user
else {
    // Include template form đăng nhập, đăng ký
    require_once 'templates/signin-up-form.php';
}
// Include footer
require_once 'includes/footer.php';

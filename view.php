<?php

// Include database, session, general info
require_once 'core/init.php';
// Include header
require_once 'includes/header.php';
// Nếu có ID truyền vào
if (isset($_GET['id'])) {
    $get_id = addslashes(trim(htmlentities($_GET['id'])));
    if ($get_id != '') {
        // Lệnh truy vấn kiểm tra sự tồn tại và quyền sở hữu note
        $sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE id_note = '$get_id' AND share = 1";

        // Nếu có tồn tại và thuộc quyền sở hữu
        if ($db->num_rows($sql_check_id_exist)) {
            // Include template chỉnh sửa note
            
        }
        // Ngược lại không tồn tại và không thuộc quyền sở hữu
        else {
            // Hiển thị thông báo lỗi
            echo '
            <div class="container">
                <div class="alert alert-danger">
                    Ghi chú này không tồn tại hoặc không thuộc quyền sở hữu của bạn.
                </div>
            </div>
        ';
        }
    }
    // Ngược lại không có ID truyền vào
    else {
        header('Location: index.php'); // Di chuyển về trang chủ
    }
} else {
    header('Location: index.php'); // Di chuyển về trang chủ
}
require_once 'includes/footer.php';
